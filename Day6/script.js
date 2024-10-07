const items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', '/img/logitek.jpeg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', '/img/msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', '/img/genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', '/img/jerry.jpeg']
];

const listBarang = document.getElementById("listBarang");
const keywordInput = document.getElementById("keyword");
const cartButton = document.getElementById("cart");
let cartCount = 0; // Menyimpan jumlah item di keranjang

// Fungsi untuk menampilkan card berdasarkan array items
function displayItems(items) {
    listBarang.innerHTML = ''; // Bersihkan konten sebelumnya

    items.forEach((item, index) => {
        const [id, nama, harga, deskripsi, image] = item;

        // Membuat card HTML untuk setiap item
        const cardHTML = `
            <div class="col-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <img src="${image}" class="card-img-top" height="200px" alt="${nama}">
                    <div class="card-body">
                        <h5 class="card-title">${nama}</h5>
                        <p class="card-text">${deskripsi}</p>
                        <p class="card-text">Rp ${harga.toLocaleString('id-ID')}</p>
                        <button class="btn btn-primary add-to-cart" data-index="${index}">Tambahkan ke keranjang</button>
                    </div>
                </div>
            </div>
        `;

        listBarang.insertAdjacentHTML("beforeend", cardHTML);
    });


    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    addToCartButtons.forEach(button => {
        button.addEventListener("click", function() {
            cartCount++;
            updateCartDisplay();
        });
    });
}

function updateCartDisplay() {
    cartButton.innerHTML = `<i class="fas fa-shopping-cart"></i> (${cartCount})`;
}

function filterItems(keyword) {
    const filteredItems = items.filter(item => item[1].toLowerCase().includes(keyword.toLowerCase()));
    displayItems(filteredItems);
}


keywordInput.addEventListener("input", function() {
    const keyword = keywordInput.value.trim(); 

    if (keyword) {
        filterItems(keyword); 
    } else {
        displayItems(items);
    }
});


displayItems(items);
