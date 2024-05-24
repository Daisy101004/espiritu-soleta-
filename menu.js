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

const menuContainer = document.querySelector("#menu-container");

let menuList = '';

menuData.map((item) => {
    const menuItem = `
        <div key${item.id} class="card" style="width: 18rem;">
            <img src=${item.image} class="card-img-top rounded" style="height:250px;" alt=${item.name}>
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">${item.name}</h5>
                    <h5 class="card-title">&#8369;${item.price}</h5>
                </div>
                <button class="btn btn-primary menu-btn justify-self-end" type="button" data-menu="${item.name}">Add to cart</button>
            </div>
        </div>
    `;
    menuList += menuItem;
})

menuContainer.innerHTML = menuList; 

const menuBtn = document.querySelectorAll(".menu-btn");
menuBtn.forEach(button => (
    button.addEventListener("click", (event) => {  
        const localStorageData = JSON.parse(localStorage.getItem("cart-item"));
        if(!localStorageData){
            localStorage.setItem('cart-item', JSON.stringify({[event.target.dataset.menu]: 1}));
        }
        else{
            if(Object.keys(localStorageData).includes(event.target.dataset.menu)){
                localStorage.setItem('cart-item', JSON.stringify({ ...localStorageData, [event.target.dataset.menu]: (localStorageData[event.target.dataset.menu] + 1)}));
            }
            else{
                localStorage.setItem('cart-item', JSON.stringify({ ...localStorageData, [event.target.dataset.menu]: 1}));
            }
        }
        location.reload()
    })
))
