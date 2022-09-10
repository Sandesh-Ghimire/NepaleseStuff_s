// Initially Load Content as Dashboard
let flag = true;
if (flag == true) {
    getDynamicContent('dashboard.php');
    flag = false;
}

// In case of error while processing any request
function errorHandler(contentLink) {
    getDynamicContent('error.php');
}

// Change Content (event: 'click')
function getDynamicContent(contentLink) {
    fetch(contentLink, {
            method: 'HEAD'
        })
        .then(res => {
            if (res.ok) {
                $('#dynamic-content').load(contentLink);
                // location.reload(false);
                // $('#scrollUp').trigger('click');

            } else {
                errorHandler(contentLink);
            }
        }).catch(err => {
            errorHandler(contentLink)
        });
}

// Redirect to another page
function goToAnotherPage(pageLink) {
    window.location.href = pageLink;
}