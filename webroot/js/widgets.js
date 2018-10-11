function Widget() {

}

Widget.get = function (url, data = []) {
    'use strict';
    return new Promise((resolve, reject) => {
        fetch(url, {
            body: JSON.stringify(data)
        }).then(response => {
            resolve(response.json());
        }).catch(error => {
            reject(error);
        });
    });
};

Widget.executeQuery = function (query, data) {
    'use strict';
    return Widget.get(`/agito/dashboard/api/queries/execute/${query}`, data);
};

Widget.prototype.GraphQuery = function (wrapperId, queryId, options) {
    'use strict';
    let wrapper = document.querySelector(wrapperId);

    let request = Widget.executeQuery(queryId, options.data);

    request.then(response => {

        if (!response.ok) {
            throw new Error('Could not fetch data');
        }

        response.then(data => {

            if (!Array.isArray(options.value)) {
                options.value = [options.value];
            }

            if (!Array.isArray(options.y_label)) {
                options.y_label = [options.y_label];
            }

            if (!Array.isArray(options.color)) {
                options.color = [options.color];
            }

            let datasets = [];

            let labels = [];

            options.value.forEach((value, index) => {
                datasets.push({
                    label: options.y_label[index],
                    backgroundColor: options.color[index],
                    borderColor: options.color[index],
                    fill: false,
                    data: data.map((row) => {
                        if (labels.length < data.length) {
                            labels.push(row[options.label]);
                        }
                        return row[value];
                    })
                });
            });

            let wrapper = document.querySelector(`${wrapperId}_canvas`),
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

Widget.prototype.Indicator = function (wrapperId, queryId, options) {
    'use strict';

    let request = Widget.executeQuery(queryId);

    let wrapper = document.querySelector(`${wrapperId}_text`);

    request.then(response => {
        wrapper.innerHTML = response[0][options.key];
    }).catch(error => {
        wrapper.innerHTML = error;
    });
};

let widget = new Widget();