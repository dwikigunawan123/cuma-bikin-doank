document.querySelectorAll('.btnDetail').forEach(item=>{
 item.addEventListener('click', (e) => {
    let parent = e.target.parentNode.parentNode;

    let gambar = parent.querySelector('.card-img-top').src;
    let harga = parent.querySelector('.harga').innerHTML;
    let judul = parent.querySelector('.card-text').innerHTML;
    let deskripsi = parent.querySelector('.deskripsi')? parent.querySelector('.deskripsi').innerHTML : '<i>Malas harus pergi ke toko buku? Hari serba canggih! Kamu tidak perlu pergi keluar rumah, ataupun tak perlu lagi menghabiskan bensin dan menghabiskan waktu. Cukup duduk manis di depan smartphone ataupun laptop kamu. Dan kamu bisa berbelanja apa saja di sana. Salah satunya adalah berbelanja buku-buku kuliah.<i/>';
    

    let tombolModal = document.querySelector('.btnModal');
    tombolModal.click();

    document.querySelector('.modalTitle').innerHTML = judul;
    let image = document.createElement('img');
    image.src = gambar;
    image.classList.add('w-100');
    document.querySelector('.modalImage').innerHTML='';
    document.querySelector('.modalImage').appendChild(image);
    document.querySelector('.modalDeskripsi').innerHTML = deskripsi;
    document.querySelector('.modalHarga').innerHTML = harga;
 });
});