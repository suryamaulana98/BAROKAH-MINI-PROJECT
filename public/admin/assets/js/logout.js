function logout() {
    Swal.fire({
        title: 'Logout ?',
        text: "Apakah kamu yakin mau logout?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!'
    }).then((result) => {
        window.location = '/logout'
    })
}
