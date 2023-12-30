
document.addEventListener('DOMContentLoaded', function () {

    var deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(function (button) {
        button.addEventListener('click', function () {

            var recordId = button.dataset.id;


            fetch('delete_record.php?id=' + recordId, {
                method: 'DELETE',
            })
                .then(function (response) {

                    if (response.ok) {
                        location.reload();
                    }
                })
                .catch(function (error) {
                    console.error('Ошибка удаления записи:', error);
                });
        });
    });
});