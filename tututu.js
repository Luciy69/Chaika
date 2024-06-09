function avatar(event) {
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function() {
            const image = document.getElementById('avatar');
            const img = new Image();
            img.src = reader.result;
            
            img.onload = function() {
                if (img.width > 1800 || img.height > 1600) {
                    alert('Размер изображения слишком большой! Максимальные допустимые размеры: ширина - 800px, высота - 600px');
                    event.target.value = ""; // Очищаем выбранный файл
                } else {
                    image.src = reader.result;
                    // Сохраняем путь к загруженному изображению в localStorage
                    localStorage.setItem('profileImage', reader.result);
                }
            }
        };
        
        reader.readAsDataURL(file);
    }
}

function uploadImage() {
    const file = document.getElementById('file-input').files[0];
    const reader = new FileReader();

    reader.onload = function() {
        localStorage.setItem('profileImage', reader.result); // Сохраняем изображение в локальное хранилище
    };

    reader.readAsDataURL(file);
}

document.addEventListener('DOMContentLoaded', function() {
    const savedImage = localStorage.getItem('profileImage');

    if (savedImage) {
        document.getElementById('avatar').src = savedImage; // Отображаем сохраненное изображение в элементе с id 'avatar'
    }
});