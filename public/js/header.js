//  alert('hello')


const closeAside = document.getElementsByClassName('close-aside-button')[0].addEventListener('click',()=>{
    closemenu(document.getElementsByClassName('res-aside-header')[0])

})

const openAside = document.getElementsByClassName('res-reft-main-header-item1')[0].addEventListener('click',()=>{
    console.log('click')
    openmenu(document.getElementsByClassName('res-aside-header')[0])

})

function openmenu(openwrap){
    const trantisionValue = openwrap.clientWidth
    openwrap.style['transform'] = `translateX(${0}px)`
    
}


function closemenu(closewrap){
    const trantisionValue = closewrap.clientWidth
    closewrap.style['transform'] = `translateX(-${trantisionValue}px)`
    
}


//res header open
const serchbutton = document.getElementsByClassName('res-reft-main-header-item2')[0]
const foternav = document.getElementsByClassName('res-serch')[0]
serchbutton.addEventListener('click',()=>{
    console.log('serch')
    foternav.style['display'] = 'block'
})
//res header close
const closebutton = document.getElementsByClassName('close-button')[1]
closebutton.addEventListener('click',()=>{
    console.log('close')
    foternav.style['display'] = 'none'
})



