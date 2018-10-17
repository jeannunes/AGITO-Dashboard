if (typeof CodeMirror === 'undefined') {
    var CodeMirror = {};
}

CodeMirror.fromTextArea(document.querySelector('textarea[name=query]'), {
    mode: 'text/x-mysql',
    indentWithTabs: true,
    smartIndent: true,
    lineNumbers: true,
    matchBrackets: true,
    autofocus: true,
    extraKeys: {'Ctrl-Space': 'autocomplete'},
    hintOptions: {
        tables: {
            users: ['name', 'score', 'birthDate'],
            countries: ['name', 'population', 'size']
        }
    }
});