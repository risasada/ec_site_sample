const newsSelector = document.getElementsByClassName('newsSelector')
const sexSelector = document.getElementsByClassName('sexSelector')
const mailSelector = document.getElementsByClassName('mailSelector')

const countrySelect = document.getElementsByClassName('country')[0]

for (const newsElement of newsSelector) {
  newsElement.addEventListener('click',function() {
    resetCheckbox(newsSelector)
    this.checked = true
  })
}

for (const sexElement of sexSelector) {
  sexElement.addEventListener('click',function() {
    resetCheckbox(sexSelector)
    this.checked = true
  })
}

for (const mailElement of mailSelector) {
  mailElement.addEventListener('click',function() {
    resetCheckbox(mailSelector)
    this.checked = true
  })
}


function resetCheckbox(checkElements) {
  for (const checkElement of checkElements) {
    checkElement.checked = false
  }
}



/*
async function locationApi(){
    const result = await fetch('https://restcountries.com/v3.1/all')
    const tojson = await result.json();

    for (const location of tojson) {
      try{
        const dd = location.translations.jpn.common
        console.log(dd)
        const opele = document.createElement('option') 
        opele.innerHTML = dd
        countrySelect.append(opele)
      }catch(err){
        if (err instanceof TypeError){
          continue
        }else{
          console.log('err_chatch',err)
          break
        }
      }
    }
    // console.log(tojson[0].translations.jpn.common)
  }

  locationApi()
*/