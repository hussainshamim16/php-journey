

let isBtnClick = false ;
let Navbar_ui = document.getElementById('navSidebar');
function closeNav (e) {
if(!isBtnClick){
    isBtnClick = true;
    Navbar_ui.style.transform = "translateX(0px)";
    e.innerHTML = "◀"
}else{
    isBtnClick = false;
    Navbar_ui.style.transform = "translateX(-10rem)";
    e.innerHTML = "❌"
}
}




// list 
const list = document.getElementById('list');
for (let i = 1; i <= 20; i++) {
list.innerHTML += `
    <li>
        <a href="#">${i} Home</a>
    </li>
`    
}










// const login = true;
// const ifLogin = document.getElementById('ifLogin');
// const mainmenu = document.getElementById('mainmenu');
// const menubar = document.getElementById('menubar');
// if (login) {
//     ifLogin.classList.add("d-none")
//     mainmenu.classList.add("d-flex")
//     menubar.classList.add("d-flex")
// } else {
//     ifLogin.classList.add("d-flex")
//     mainmenu.classList.add("d-none")
//     menubar.classList.add("d-none")
// }




// screen -----
// const screen = [
//     "signuppage",
//     "loginpage",
//     "resetpasswordpage",
//     "profilepage",
//     "addbookpage",
//     "managebookpage",
//     "allbookspage",
//     "singlebookpage",
//     "checkbookpage",
//     "downloadbookpage",
//     "physicalbookpage"
// ]
// const pagesId = []

// screen.forEach(value => {
//     pagesId.push(document.getElementById(`${value}`),)
// })

// // chcek location and path
// const pathOfBrowser = window.location.search;

// // after checking only spicefic page render
// pagesId.forEach((value, index) => {
//     if (pathOfBrowser === "/") {
//         console.log("hello")
//     }
//     if (pathOfBrowser == "?" + value.id) {
//         value.classList.add('d-flex')
//     }
//     else {
//         value.classList.add('d-none')
//     }
// })

// // console.log(pathOfBrowser === "?"+pagesId[0].id)




// // const pathsearch = ["?signup", "?login", "?resetpassword", "?profile", "?addbook", "?managebooks", "?singlebook", "?checkbooks", "?downloadbook", "?physicalbookpage", "?all-books"]
// // for (const key in screen) {
// //     pagesId.push(document.getElementById(`${key}`),)
// // }
// // console.log(pagesId)


// // // chcek location and path
// // const pathOfBrowser = window.location.search;
// // pathsearch.forEach(value => {
// //     if (value === pathOfBrowser) {
// //         console.log(value)
// //     }
// // })

// const clicker = (ele) => {
//     console.log(ele.innerHTML == "login")
//     // window.location.add("/skljl")

//     // } else {
//     //     console.log(ele.innerHTML == "login")
//     // }
// }




// book 1
const bookContainerOne = document.getElementById('bookContainer1');

for (let i = 0; i < 8; i++) {
    bookContainerOne.innerHTML += `
                <div class="card book-card py-3">
                <a href="#">
                    <img src="./images/book-cover.jpg" class="card-img-top" alt="book-image">
                </a>
                <div class="card-body p-3 px-2">
                    <a href="#" class="card-title">Create Your Own Busniess</a>
                </div>
                <p><del class="text-danger">Rs 300</del> <strong>Rs 200</strong></p>
                <a href="./pages/single-book.html" class="btn bg-dark text-light w-100">Add To Cart</a>
            </div>    
    `
}
// book 2
const bookContainerTwo = document.getElementById('bookContainer2');

for (let i = 0; i < 8; i++) {
    bookContainerTwo.innerHTML += `
                <div class="card book-card py-3">
                <a href="#">
                    <img src="./images/book-cover.jpg" class="card-img-top" alt="book-image">
                </a>
                <div class="card-body p-3 px-2">
                    <a href="#" class="card-title">Create Your Own Busniess</a>
                </div>
                <p><del class="text-danger">Rs 300</del> <strong>Rs 200</strong></p>
                <a href="./pages/single-book.html" class="btn bg-dark text-light w-100">Add To Cart</a>
            </div>    
    `
}


// admin-dashboard
// navbar
// function closeNav(e) {
    // isCllick ? console.log(isCllick) : console.log("nhi chala"); ternary opertaor
    
    // let isclick = false;


// }



