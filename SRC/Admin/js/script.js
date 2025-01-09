const menuLi = document.querySelectorAll('.admin-all-content > ul > li > a')
const subMenu = document.querySelectorAll('.sub-menu')
for(let index = 0; index < menuLi.length; index++) {
    menuLi[index].addEventListener('click', (e)=>{
        e.preventDefault()
        //menuLi[index].parentNode.querySelector('ul').classList.toggle('active')
        // console.log(menuLi[index].parentNode.querySelector('ul'))

        for(let i = 0; i < subMenu.length; i++){
            subMenu[i].setAttribute("style", "height: 0px")
        }
        const submenuHeight = menuLi[index].parentNode.querySelector('ul .sub-menu-items').offsetHeight
        menuLi[index].parentNode.querySelector('ul').setAttribute("style", "height:"+submenuHeight+"px");
    })
}