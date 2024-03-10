const fadeTarget = document.querySelector(".loading");

function show_loading() {
  fadeTarget.style.display = "block";
  fadeTarget.style.opacity = 1;
}

function hide_loading() {
  //   fadeTarget.style.display = "none";
  const fadeEffect = setInterval(() => {
    if (!fadeTarget.style.opacity) {
      fadeTarget.style.opacity = 1;
    }

    if (fadeTarget.style.opacity > 0) {
      fadeTarget.style.opacity -= 0.1;
    } else {
      clearInterval(fadeEffect);
      fadeTarget.style.display = "none";
    }
  }, 100);
}

function data_table() {
  table.style.display = "none";
}

// Mengambil data dari API menggunakan Javascript Murni
function tampil_data_ajax_api() {
  show_loading();
  fetch("https://jsonplaceholder.typicode.com/comments")
    .then((response) => response.json())
    .then((response) => {
      const tableBody = document.getElementById("data_body");
      const tableHead = document.querySelector("#data_table thead");

      tableHead.innerHTML = `
        <tr>
            <th>PostId</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Body</th>
        </tr>
      `;

      tableBody.innerHTML = "";

      response.forEach((data) => {
        var row = document.createElement("tr");
        row.innerHTML = `
                <td>${data.postId}</td>
                <td>${data.id}</td>
                <td>${data.name}</td>
                <td>${data.email}</td>
                <td>${data.body}</td>
            `;
        tableBody.appendChild(row);
      });

      $("#data_table").show();
      hide_loading();
    });
}

// Mengambil data dari Database menggunakan JQUERY
function tampil_data_ajax() {
  show_loading();
  $.ajax({
    url: "data.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      const tableBody = document.getElementById("data_body");
      const tableHead = document.querySelector("#data_table thead");

      tableHead.innerHTML = `
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Deskripsi</th>
          <th>Tanggal</th>
        </tr>
      `;

      tableBody.innerHTML = "";

      // Pastikan data adalah array
      if (Array.isArray(data)) {
        data.forEach(function (item) {
          var row = document.createElement("tr");
          row.innerHTML = `
                <td>${item.id}</td>
                <td>${item.nama}</td>
                <td>${item.deskripsi}</td>
                <td>${item.date}</td>
            `;
          tableBody.appendChild(row);
        });
      } else {
        console.error("Data is not an array");
      }

      hide_loading();
      $("#data_table").show();
    },
  });
}
