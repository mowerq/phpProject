console.log('emirhan erbilll jfklşdsajfkdşlsafjkl');
function changePage(newContentPhpQuery) {
    const url = 'teachers_page_filters.php?'+newContentPhpQuery;
    const options = {
        method : 'GET'
    }
    fetch(url, options)
    .then(res => res.json())
    .then(data => {
        console.log(data)
    })
    .catch(err => console.log(err))


    console.log(newContentPhpQuery);
}
