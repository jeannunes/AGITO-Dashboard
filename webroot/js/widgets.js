function Widget() {

}

Widget.prototype.get = function (url, options) {
    return fetch(url, options);
}

Widget.prototype.GraphQuery = function (wrapper_id, query_id, options) {

    let wrapper = document.querySelector(wrapper_id);

    let request = this.get(`/agito/dashboard/api/queries/execute/${query_id}`, {
        body: JSON.stringify(options.data) || null
    });

    request.then(response => {

        if (!response.ok)
            throw new Error('Could not fetch data');

        let datasets = [];

        response.json().then(data => {

            if (!Array.isArray(options.value))
                options.value = [options.value];

            if (!Array.isArray(options.y_label))
                options.y_label = [options.y_label];

            if (!Array.isArray(options.color))
                options.color = [options.color];

            let datasets = [];

            let labels = [];

            options.value.forEach((value, index) => {
                datasets.push({
                    label: options.y_label[index],
                    backgroundColor: options.color[index],
                    borderColor: options.color[index],
                    fill: false,
                    data: data.map((row) => {
                        if (labels.length < data.length)
                            labels.push(row[options.label]);
                        return row[value];
                    })
                });
            });

            let wrapper = document.querySelector(`${wrapper_id}_canvas`),
                ctx = wrapper.getContext('2d');

            new Chart(ctx, {
                type: options.type || 'line',
                data: {
                    labels: labels,
                    fill: options.fill || false,
                    datasets: datasets
                },
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        // intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        // intersect: true
                    },
                }
            });

        });

    }).catch(error => {
        wrapper.innerHTML = error;
    });
}

Widget.prototype.Indicator = function (wrapper_id, query_id, options) {

    let request = this.get(`/agito/dashboard/api/queries/execute/${query_id}`);

    let wrapper = document.querySelector(`${wrapper_id}_text`);

    request.then(response => {

        if (!response.ok)
            throw new Error('Could not load data');

        response.json().then(rows => {
            wrapper.innerHTML = rows[0][options.key];
        });

    }).catch(error => {
        wrapper.innerHTML = error;
    });
}

let widget = new Widget();