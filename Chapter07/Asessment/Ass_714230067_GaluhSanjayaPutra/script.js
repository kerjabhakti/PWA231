document.addEventListener("DOMContentLoaded", function () {
  // Data jadwal kuliah (contoh)
  const jadwalKuliah = [
    {
      hari: "Senin",
      matkul: "Bahasa Inggris",
      waktu: "08:00 - 10:00",
      sks: "2",
      dosen: "Rd.Nuraini Siti Fathonah,S.S.,M.Hum",
    },
    {
      hari: "Senin",
      matkul: "Literasi Teknologi 1 + Pratikum",
      waktu: "10:30 - 12:30",
      sks: "3",
      dosen: "Roni Habibi,S.kom.,M.T.,SFPC",
    },
    {
      hari: "Selasa",
      matkul: "Bahasa Indonesia",
      waktu: "10:30 - 12:30",
      sks: "2",
      dosen: "Riska Novia Matalata,M.Pd",
    },
    {
      hari: "Selasa",
      matkul: "Matematika Dikrit",
      waktu: "10:30 - 12:30",
      sks: "2",
      dosen: "Cahyo Prianto,S.Pd.,M.T.,CDSP.,SFPC",
    },
    {
      hari: "Rabu",
      matkul: "Pendidikan Pancasila",
      waktu: "10:30 - 12:30",
      sks: "2",
      dosen: "Sri Ramdiani,S.Pd.,M.Pd",
    },
    {
      hari: "Kamis",
      matkul: "Algoritma Dan Struktur Data 1",
      waktu: "10:30 - 12:30",
      sks: "2",
      dosen: "Mohamad Nurkamal Fauzan,S.T.,M.T.,SFPC",
    },

    {
      hari: "Kamis",
      matkul: "Pemograman 1",
      waktu: "10:30 - 12:30",
      sks: "2",
      dosen: "Roni Andrasyah,ST.,M.KOM.,SFPC",
    },

    {
      hari: "Jumat",
      matkul: "Pendidikan Agama",
      waktu: "10:30 - 12:30",
      sks: "2",
      dosen: "Rieky Agung Laksono,M.Pd.l",
    },
    // Tambahkan jadwal kuliah lainnya
  ];

  // Ambil elemen tbody dari tabel
  const tbody = document.querySelector("#jadwal-table tbody");

  // Tampilkan jadwal kuliah dalam tabel
  jadwalKuliah.forEach((jadwal) => {
    const row = document.createElement("tr");
    row.innerHTML = `
        <td>${jadwal.hari}</td>
        <td>${jadwal.matkul}</td>
        <td>${jadwal.waktu}</td>
        <td>${jadwal.sks}</td>
        <td>${jadwal.dosen}</td>
        
        
      `;
    tbody.appendChild(row);
  });
});
