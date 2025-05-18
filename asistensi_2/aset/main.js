function activeSideBard() {
    const activeSemua = document.getElementById('activeSemua');
    const activeKerjan = document.getElementById('activeKerja');
    const activePribadi = document.getElementById('activePribadi');
    const activeSekolah = document.getElementById('activeSekolah');

    activeSemua.addEventListener('click', function() {
        activeSemua.classList.add('bg-primary', 'text-white');
        activeKerjan.classList.remove('bg-primary', 'text-white');
        activePribadi.classList.remove('bg-primary', 'text-white');
        activeSekolah.classList.remove('bg-primary', 'text-white');
        renderTable(); 
    });

    activeKerjan.addEventListener('click', function() {
        activeSemua.classList.remove('bg-primary', 'text-white');
        activeKerjan.classList.add('bg-primary', 'text-white');
        activePribadi.classList.remove('bg-primary', 'text-white');
        activeSekolah.classList.remove('bg-primary', 'text-white');
        const kategorivalue = "kerja";  
        renderTableKategori(kategorivalue);
    });

    activePribadi.addEventListener('click', function() {
        activeSemua.classList.remove('bg-primary', 'text-white');
        activeKerjan.classList.remove('bg-primary', 'text-white');
        activePribadi.classList.add('bg-primary', 'text-white');
        activeSekolah.classList.remove('bg-primary', 'text-white');
        const kategorivalue = "Pribadi";  
        renderTableKategori(kategorivalue);
    });

    activeSekolah.addEventListener('click', function() {
        activeSemua.classList.remove('bg-primary', 'text-white');
        activeKerjan.classList.remove('bg-primary', 'text-white');
        activePribadi.classList.remove('bg-primary', 'text-white');
        activeSekolah.classList.add('bg-primary', 'text-white');
        const kategorivalue = "Sekolah";  
        renderTableKategori(kategorivalue);  
    });
}

activeSideBard();

const allData = [];
const judul = document.getElementById('judul');
const kategori = document.getElementById('kategori');
const tanggal = document.getElementById('tanggal');
const Satatus = document.getElementById('status');
const tableBody = document.getElementById('tableBody');
const searchInput = document.getElementById('searchInput');

function saveToLocalStorage() {
    localStorage.setItem('allData', JSON.stringify(allData));
}

function loadFromLocalStorage() {
    const data = localStorage.getItem('allData');
    if (data) {
        allData.push(...JSON.parse(data));
    }
}

function renderTable() {
    tableBody.innerHTML = '';
    allData.forEach((item, index) => {
        let statusClass = '';
        if (item.Satatus === "Belum Selesai") statusClass = 'bg-warning text-dark';
        else if (item.Satatus === "Selesai") statusClass = 'bg-success text-white';

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.judul}</td>
            <td>${item.kategori}</td>
            <td>${item.tanggal}</td>
            <td>
                <span class="${statusClass} p-1 rounded">${item.Satatus}</span>
            </td>
            <td>
                <button type="button" class="btn btn-primary btn-update" data-index=${index}>Edit</button>
                <button type="button" class="btn btn-danger btn-hapus" data-index=${index}>Hapus</button>
            </td>
        `;
        tableBody.appendChild(row);
    });

    const hapusButtons = document.querySelectorAll('.btn-hapus');
    hapusButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            let index = this.getAttribute('data-index');
            if (confirm('Yakin ingin menghapus data ini?')) {
                allData.splice(index, 1);
                saveToLocalStorage();
                renderTable();
            }
        });
    });

    const updateButtons = document.querySelectorAll('.btn-update');
    updateButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            handleEdit(index);  
        });
    });
}

function renderTableKategori(kategoriAktif) {
    tableBody.innerHTML = '';
    allData.forEach((item, index) => {
        if (item.kategori === kategoriAktif) {
            let statusClass = '';
            if (item.Satatus === "Belum Selesai") statusClass = 'bg-warning text-dark';
            else if (item.Satatus === "Selesai") statusClass = 'bg-success text-white';

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.judul}</td>
                <td>${item.kategori}</td>
                <td>${item.tanggal}</td>
                <td>
                    <span class="${statusClass} p-1 rounded">${item.Satatus}</span>
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-update" data-index=${index}>Edit</button>
                    <button type="button" class="btn btn-danger btn-hapus" data-index=${index}>Hapus</button>
                </td>
            `;
            tableBody.appendChild(row);
        }
    });
}

function addData() {
    const data = {
        judul: judul.value,
        kategori: kategori.value,
        tanggal: tanggal.value,
        Satatus: Satatus.value
    };

    if (judul.value !== '') {
        allData.push(data);
        saveToLocalStorage();
        renderTable();
        judul.value = '';
        kategori.value = '';
        tanggal.value = '';
        Satatus.value = '';
    } else {
        alert('Form harus diisi');
    }
}

const btnSubmit = document.getElementById('submitData');
btnSubmit.addEventListener('click', function(e) {
    e.preventDefault();
    addData();
});

function handleEdit(index) {
    const item = allData[index];
    
    judul.value = item.judul;
    kategori.value = item.kategori;
    tanggal.value = item.tanggal;
    Satatus.value = item.Satatus;

    const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
    modal.show();

    const btnSubmit = document.getElementById('submitData');
    btnSubmit.textContent = "Update"; 

    btnSubmit.removeEventListener('click', addData); 
    btnSubmit.addEventListener('click', function(e) {
        e.preventDefault();
        
        item.judul = judul.value;
        item.kategori = kategori.value;
        item.tanggal = tanggal.value;
        item.Satatus = Satatus.value;

        saveToLocalStorage();
        renderTable(); 

        modal.hide();

        judul.value = '';
        kategori.value = '';
        tanggal.value = '';
        Satatus.value = '';
    });
}

searchInput.addEventListener('input', function() {
    const searchTerm = searchInput.value.toLowerCase();
    const filteredData = allData.filter(item => item.judul.toLowerCase().includes(searchTerm));
    renderTableWithSearch(filteredData);
});

function renderTableWithSearch(data) {
    tableBody.innerHTML = '';
    data.forEach((item, index) => {
        let statusClass = '';
        if (item.Satatus === "Belum Selesai") statusClass = 'bg-warning text-dark';
        else if (item.Satatus === "Selesai") statusClass = 'bg-success text-white';

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.judul}</td>
            <td>${item.kategori}</td>
            <td>${item.tanggal}</td>
            <td>
                <span class="${statusClass} p-1 rounded">${item.Satatus}</span>
            </td>
            <td>
                <button type="button" class="btn btn-primary btn-update" data-index=${index}>Edit</button>
                <button type="button" class="btn btn-danger btn-hapus" data-index=${index}>Hapus</button>
            </td>
        `;
        tableBody.appendChild(row);
    });
}

loadFromLocalStorage();
renderTable();