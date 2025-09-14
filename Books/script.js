const login = false;
const ifLogin = document.getElementById('ifLogin');
const mainmenu = document.getElementById('mainmenu');
const menubar = document.getElementById('menubar');
if (login) {
    ifLogin.classList.add("d-none")
    mainmenu.classList.add("d-flex")
    menubar.classList.add("d-flex")
} else {
    ifLogin.classList.add("d-flex")
    mainmenu.classList.add("d-none")
    menubar.classList.add("d-none")
}


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




