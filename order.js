// document.addEventListener("DOMContentLoaded", function() {
//     // Retrieve the selected product name from localStorage
//     var productName = localStorage.getItem("productName");
  
//     // Update the product name in the order details section
//     var productNameElement = document.getElementById("product-name");
//     productNameElement.textContent = productName;s
//   });
  
//   function handleSubmitOrder(event) {
//     event.preventDefault();
  
//     const name = document.getElementById('name').value;
//     const email = document.getElementById('email').value;
//     const address = document.getElementById('address').value;
  
//     const orderDetails = {
//       productName: productNameElement.textContent,
//       customerName: name,
//       customerEmail: email,
//       customerAddress: address,
//     };
  
//     // Display the order details
//     const orderDetailsContainer = document.getElementById('order-details');
//     orderDetailsContainer.style.display = 'block';
//     orderDetailsContainer.innerHTML = `
//       <h3>Order Details</h3>
//       <p><strong>Product:</strong> ${orderDetails.productName}</p>
//       <p><strong>Name:</strong> ${orderDetails.customerName}</p>
//       <p><strong>Email:</strong> ${orderDetails.customerEmail}</p>
//       <p><strong>Address:</strong> ${orderDetails.customerAddress}</p>
//     `;
  
//     customerInfoForm.reset();
//   }
  
//   const customerInfoForm = document.getElementById('customer-info-form');
//   customerInfoForm.addEventListener('submit', handleSubmitOrder);

const menuData = [
  {
      id: 1,
      name: "Shark's Fin With Hainanase Rice",
      price: 55,
      image: "src/images/sharkfin.jpg",
  },
  {
      id: 2,
      name: "Iced Macchiato",
      price: 60,
      size: "Medium",
      image: "src/images/iced-mach.jpg",
  },
  {
      id: 3,
      name: "Mocha Frappe",
      price: 60,
      size: "Medium",
      image: "src/images/mocha-frappe.jpg",
  },
  {
      id: 4,
      name: "Black Burger",
      price: 65,
      size: "Classic Craver's Burger",
      image: "src/images/blackburger.jpg",
  },
  {
      id: 5,
      name: "Tacos",
      price: 75,
      image: "src/images/tacos.jpg",
  },
  {
      id: 6,
      name: "Buy 1 Take 1 Sandwich",
      price: 99,
      image: "src/images/buy-1-take-1-sndwch.jpg",
  },
  {
      id: 7,
      name: "Chicken Karaage",
      price: 100,
      image: "src/images/chicken-karaage.jpg",
  },
  {
      id: 8,
      name: "Nachos",
      price: 100,
      image: "src/images/nachos.jpg",
  },
  {
      id: 9,
      name: "Chicken Tonkatsu",
      price: 100,
      image: "src/images/chicken-tonkatsu.jpg",
  },
];
const municipalities = ["Buenavista", "Gasan", "Boac", "Mogpog", "Sta Cruz", "Torrijos"];
const address = {
    Boac: [
      "Agot",
      "Agumaymayan",
      "Amoingon",
      "Apitong",
      "Balagasan",
      "Balaring",
      "Balimbing",
      "Balogo",
      "Bamban",
      "Bangbangalon",
      "Bantad",
      "Bantay",
      "Bayuti",
      "Binunga",
      "Boi",
      "Boton",
      "Buliasnin",
      "Bunganay",
      "Caganhao",
      "Canat",
      "Catubugan",,
      "Cawit",
      "Daig",
      "Daypay",
      "Duyay",
      "Hinapulan",
      "Ihatub",
      "Isok 1 (Poblacion)",
      "Isok 2 (Poblacion)",
      "Laylay",
      "Lupac",
      "Mahinhin",
      "Mainit",
      "Malbog",
      "Maligaya",
      "Malusak (Poblacion)",
      "Mansiwat",
      "Mataas na Bayan (Poblacion)",
      "Maybo",
      "Mercado (Poblacion)",
      "Murallon (Poblacion)",
      "Pawa",
      "Pili",
      "Poctoy",
      "Poras",
      "Putting Buhangin",
      "Puyog",
      "Sabong",
      "San Miguel (Poblacion)",
      "Santol",
      "Sawi",
      "Tabi",
      "Tabigue",
      "Tagwak",
      "Tambunan",
      "Tampus (Poblacion)",
      "Tanza",
      "Tugos",
      "Tumagabok",
      "Tumapon"
    ],
    Gasan: [
      "Antipolo",
      "Bachao Ibaba",
      "Bachao Ilaya",
      "Bacong-Bacong",
      "Bahi",
      "Bangban,g",
      "Banot",
      "Banuyo",
      "Bognuyan",
      "Cabugao",
      "Dawis",
      "Dili",
      "Libtangin",
      "Mahunig",
      "Mangiliol",
      "Masiga",
      "Matandang Gasan",
      "Pangi",
      "Pinggan",
      "Tabionan",
      "Tapuyan",
      "Tiguion",
      "Barangay I (Poblacion)",
      "Barangay II (Poblacion)",
      "Barangay III (Poblacion)",
    ],
    Buenavista: [
      "Bagacay",
      "Bagtingon",
      "Barangay I (Poblacion)",
      "Barangay II (Poblacion)",
      "Barangay III (Poblacion)",
      "Barangay IV (Poblacion)",
      "Bicas-bicas",
      "Caigangan",
      "Daykitin",
      "Libas",
      "Malbog",
      "Sihi",
      "Timbo (Sanggulong)",
      "Tungib-Lipata",
      "Yook",
    ],
    Torrijos: [
      "Bangwayin",
      "Bayakbakin",
      "Bolo",
      "Bonliw",
      "Buangan",
      "Cabuyo",
      "Cagpo",
      "Dampulan",
      "Kay Duke",
      "Mabuhay",
      "Makawayan",
      "Malibago",
      "Malinao",
      "Maranlig",
      "Marlangga",
      "Matuyatuya",
      "Nangka",
      "Pakaskasan",
      "Payanas",
      "Poblacion",
      "Poctoy",
      "Sibuyao",
      "Suha",
      "Talawan",
      "Tigwi",
    ],
    "Sta. Cruz": [
      "Alobo",
      "Angas",
      "Aturan",
      "Bagong Silang Pob. (2nd Zone)",
      "Baguidbirin",
      "Baliis",
      "Balogo",
      "Banahaw Pob. (3rd Zone Pob.)",
      "Bangcuangan",
      "Banogbog",
      "Biga",
      "Botilao",
      "Buyabod",
      "Dating Bayan",
      "Devilla",
      "Dolores",
      "Haguimit",
      "Hupi",
      "Ipil",
      "Jolo",
      "Kaganhao",
      "Kalangkang",
      "Kamandugan",
      "Kasily",
      "Kilo-kilo",
      "Kinyaman",
      "Labo",
      "Lamesa",
      "Landy(Perez)",
      "Lapu-lapu Pob. (5th Zone)",
      "Libjo",
      "Lipa",
      "Lusok",
      "Maharlika Pob. (1st Zone)",
      "Makulapnit",
      "Maniwaya",
      "Manlibunan",
      "Masaguisi",
      "Masalukot",
      "Matalaba",
      "Mongpong",
      "Morales",
      "Napo (Malabon)",
      "Pag-Asa Pob. (4th Zone)",
      "Pantayin",
      "Polo",
      "Pulong-Parang",
      "Punong",
      "San Antonio",
      "San Isidro",
      "Tagum",
      "Tamayo",
      "Tambangan",
      "Tawiran",
      "Taytay",
    ],
    Mogpog: [
      "Anapog-Sibucao",
      "Argao",
      "Balanacan",
      "Banto",
      "Bintakay",
      "Bocboc",
      "Butansapa",
      "Candahon",
      "Capayang",
      "Danao",
      "Dulong Bayan (Poblacion)",
      "Gitnang Bayan (Poblacion)",
      "Guisian",
      "Hinadharan",
      "Hinanggayon",
      "Ino",
      "Janagdong (Planned Poblacion Expansion)",
      "Lamesa",
      "Laon",
      "Magapua",
      "Malayak",
      "Malusak",
      "Mampaitan",
      "Mangyan-Mababad",
      "Market Site (Poblacion)",
      "Mataas Na Bayan (Poblacion)",
      "Mendez",
      "Nangka I (Planned Poblacion Expansion)",
      "Nangka II",
      "Paye",
      "Pili",
      "Puting Buhangin",
      "Sayao",
      "Silangan",
      "Sumangga",
      "Tarug",
      "Villa Mendez (Poblacion)",
    ],
  }
const orderList = document.querySelector("#order-list");
const totalAmount = document.querySelector("#total-amount");
const submitPay = document.querySelector("#submit-pay");
const nameInput = document.querySelector("#name-input");
const emailInput = document.querySelector("#email-input");
const addressInput = document.querySelector("#address-input");
const municipalitiesDropdown = document.querySelector("#municipalities-dropdown");
const barangayDropdown = document.querySelector("#barangay-dropdown");
let town = "Buenavista";

municipalitiesDropdown.addEventListener("change", (event) => {
  let content = "";
  address[municipalitiesDropdown.value].forEach(item => {
    content += `
      <option key="${item}" class="dropdown-item"  value="${item}">${item}</option>
    `
  });
  barangayDropdown.innerHTML = content
})



window.addEventListener("load", () => {
  //   const addItems = document.querySelectorAll(".add-item");
  //   const removeItems = document.querySelectorAll(".remove-item");
  //   // FUNCTIONS
  //   addItems.forEach((addItem) => {
  //     addItem.addEventListener("click", function(event){
  //       // const quantity = localStorageCartData
  //       console.log(event?.target?.dataset?.add);
  //       console.log(event);
  //     }, false)
  //   })
    
  //   removeItems.forEach((removeItem) => {
  //     removeItem.addEventListener("click", function(){
  //       console.log("Add order");
  //     }, false)
  //   })
  })

let orders = '';

const localStorageCartData = JSON.parse(localStorage.getItem("cart-item"));
const isUserLoginUser = JSON.parse(localStorage.getItem("userlogin"));
const userinfo = JSON.parse(localStorage.getItem("userinfo"));

if(userinfo != null){
  nameInput.value = userinfo.username;
  emailInput.value = userinfo.contact;
}


let localStorageDataKeys = [];
if(localStorageCartData != null){
  localStorageDataKeys = Object.keys(localStorageCartData);
}

municipalities.forEach(item => {
  municipalitiesDropdown.innerHTML += `
    <option key="${item}" class="dropdown-item municipality-item"  value="${item}">${item}</option>
  `
});

address[town].forEach(item => {
  barangayDropdown.innerHTML += `
    <option key="${item}" class="dropdown-item"  value="${item}">${item}</option>
  `
});

const filterData = [];
menuData.forEach((item) => {
  if(localStorageDataKeys.includes(item.name)){
    const quantity = localStorageCartData[item.name]
    filterData.push({...item, quantity})
  }
});

let totalPrice = 0;
let totalQuantity = 0;
filterData.forEach(item => {
  totalPrice += (item.price * item.quantity);
  totalQuantity += item.quantity;
});

filterData.map((item) => {
  orders += `
  <div class="d-flex m-4 rounded shadow">
    <img class="w-25 rounded" style="height:110px;"  src=${item.image} alt=${item.name}>
    <div class="d-flex flex-column py-3 gap-3 px-4" style="flex: 1">
      <h5 class="card-title">${item.name}</h5>
      <div class="d-flex align-items-center justify-content-between">
        <h6 class="card-title">&#8369;${item.price}</h6>
        <div class="d-flex gap-3 align-items-center">
          <button class="btn btn-primary remove-item" type="button" data-remove="${item.name}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8"/>
            </svg>
          </button>
          <h6 class="card-title">${item.quantity}</h6>
          <button class="btn btn-primary add-item add-item" type="button" data-add="${item.name}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
  `
})

if(localStorageCartData != null){
  orderList.innerHTML = orders; 
  totalAmount.textContent = `Total: ₱${totalPrice}.00`;
}else{
  orderList.innerHTML = '<h4 class="card-title">No Order yet!</h4>'
}

submitPay.addEventListener("click", () => {
  if(filterData.length > 0){
    if(!isUserLoginUser){
      submitPay.setAttribute("data-bs-toggle", "modal");
      submitPay.setAttribute("data-bs-target", "#exampleModalCenter");
    }else{
      submitPay.removeAttribute("data-bs-toggle", "modal");
      submitPay.removeAttribute("data-bs-target", "#exampleModalCenter");
  
      if(nameInput.value != "" && emailInput != "" && addressInput != ""){     
        let productNames = "";
        filterData.forEach(item => {
          productNames += `${item.name}-(${item.quantity}),`;
        });
        $.post("./connections/functions.php", {
          products: productNames,
          total: totalPrice,
          quantity: totalQuantity,
          address: `${barangayDropdown.value}, ${municipalitiesDropdown.value}`,
          customer_id: userinfo.id,
          username: userinfo.username,
        })
        .done(function(data) {
          console.log(data);
          alert("Dear Cravings - Thank you\nYour order has been placed successfully. Thank you for your purchase!");
          localStorage.removeItem("cart-item");
          location.reload();
          location.href = "index.php"
        });
      }else{
        alert("Please fill up all the inputs")
      }
    }
  }else{
    alert("No order yet")
  }
});

