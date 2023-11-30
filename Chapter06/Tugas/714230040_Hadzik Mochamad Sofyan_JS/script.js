const cardContainer = document.querySelector('.card-container')
const card = document.querySelector('.card')

// Text Color Changer
const red = document.querySelector('input[name=red]')
const green = document.querySelector('input[name=green]')
const blue = document.querySelector('input[name=blue]')

red.addEventListener('input', function(){
    const r = red.value
    const g = green.value
    const b = green.value
    card.style.color = `rgb(${r}, ${g}, ${b})`
    console.log("red: " + r) 
})

green.addEventListener('input', function(){
    const r = red.value
    const g = green.value
    const b = green.value
    card.style.color = `rgb(${r}, ${g}, ${b})`
    console.log("green: " + g) 
})

blue.addEventListener('input', function(){
    const r = red.value
    const g = green.value
    const b = blue.value
    card.style.color = `rgb(${r}, ${g}, ${b})`
    console.log("blue: " + b) 
})

const randomColors = document.getElementById('randomColors')

randomColors.addEventListener('click', function(){
    const r = Math.round(Math.random(255 + 1) * 100)
    const g = Math.round(Math.random(255 + 1) * 100)
    const b = Math.round(Math.random(255 + 1) * 100)

    card.style.background = `rgb(${r}, ${g}, ${b})`

    console.log(`warna acak: rgb(${r}, ${g}, ${b})`)
})


const picture = document.getElementById('picture')
const imageChangerBtn = document.getElementById('imageChanges')
let changes = true

imageChangerBtn.addEventListener('click', function(){
    if (changes){
        picture.src = 'images/Zenin Toji.jpg'
    } else {
        picture.src = 'images/Itadori Yuji.jpg'
    }

    changes = !changes
})

const inputText = document.getElementById('inputText')
const profileName = document.getElementById('cardProfileName')

inputText.addEventListener('input', function(){
    const newText = inputText.value

    profileName.textContent = newText
})