let xhr = new XMLHttpRequest();

// XMLHttp for get
function xmlHttpGet(url, callback, params = '') {
    xhr.onreadystatechange = callback;

    xhr.open('GET', url + '.php' + params, true);

    xhr.send();
}

// XMLHttp for post
function xmlHttpPost(url, callback, params = '') {
    xhr.onreadystatechange = callback;

    xhr.open('POST', url + '.php', true);

    xhr.send(params);
}

// Before sending returns callback
function beforeSend(callback) {
    if (xhr.readyState < 4) {
        callback();
    }
}

// get results with callback
function success(callback) {
    if (xhr.readyState === 4 && xhr.status === 200) {
        callback();
    }
}

// get errors with callback
function error(callback) {
    xhr.onerror = callback;
}