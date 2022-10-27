window.addEventListener('load', () => {
    // const params = (new URL(document.location)).searchParams;

    // const name = params.get('full_name');
    // const nickname = params.get('nick_name');

    const fullname = localStorage.getItem('FULLNAME');
    const nickname = localStorage.getItem('NICKNAME');

    document.querySelector('#output h1').innerHTML = fullname;
    document.querySelector('#output h2').innerHTML = nickname;

});