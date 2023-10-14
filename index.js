const delete_all = document.querySelector('.delete_all');
const checkbox = document.querySelectorAll('input[type="checkbox"]');
const add_to_cart = document.querySelector('.btn_pro button');

for (let index = 0; index < checkbox.length; index++) {
    const box = checkbox[index];
    box.addEventListener('change', () => {
        box.checked ? delete_all.style.display = "inline-block" :
            delete_all.style.display = "none"
    })
}

function checkAll() {
    for (let index = 0; index < checkbox.length; index++) {
        const box = checkbox[index];
        box.checked = true;
        delete_all.style.display = "inline-block"
    }
}

function checkRemoveAll() {
    for (let index = 0; index < checkbox.length; index++) {
        const box = checkbox[index];
        box.checked = false;
        delete_all.style.display = "none"
    }
}



