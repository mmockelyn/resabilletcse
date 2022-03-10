$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let action = {
    logout: document.querySelector('.logout')
}

if(action.logout) {
    action.logout.addEventListener('click', e => {
        e.preventDefault()

        $.ajax({
            url: e.target.getAttribute('href'),
            method: 'POST',
            success: () => {
                window.location.reload()
            }
        })
    })
}
