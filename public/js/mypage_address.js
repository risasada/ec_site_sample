const inputmei = document.getElementById('mei')
const errormessage_mei = document.querySelector('#mei + span.error')

const inputmyou = document.getElementById('myou')
const errormessage_myou = document.querySelector('#myou + span.error')

const inputzipcode = document.getElementById('zipcode')
const errormessage_zipcode = document.querySelector('#zipcode + span.error')

const inputtel = document.getElementById('tel')
const errormessage_tel = document.querySelector('#tel + span.error')

const inputlangage = document.getElementById('langage')
const errormessage_langage = document.querySelector('#langage + span.error')

const inputcoun = document.getElementById('coun')
const errormessage_coun = document.querySelector('#coun + span.error')

const formss = document.getElementsByClassName('forminput')[0]


//入力時バリデーション
inputmei.addEventListener('change',function(e){
  console.log('paste')
  if(validate(this)['result']){
    errormessage_mei.textContent="✓"
    // this.style['border'] = '1px solid green'
    elementChange(errormessage_mei,'reject','approval')
  }else{
    errormessage_mei.textContent="✖ Input Value Error"
    // this.style['border'] = '1px solid red'
    elementChange(errormessage_mei,'approval','reject')
  }
})


inputmyou.addEventListener('change',function(e){
  console.log('paste')
  if(validate(this)['result']){
    errormessage_myou.textContent="✓"
    // this.style['border'] = '1px solid green'
    elementChange(errormessage_myou,'reject','approval')
  }else{
    errormessage_myou.textContent="✖ Input Value Error"
    // this.style['border'] = '1px solid red'
    elementChange(errormessage_myou,'approval','reject')
  }
})

inputzipcode.addEventListener('change',function(e){
  console.log('paste')
  if(validate(this)['result']){
    errormessage_zipcode.textContent="✓"
    // this.style['border'] = '1px solid green'
    elementChange(errormessage_zipcode,'reject','approval')
  }else{
    errormessage_zipcode.textContent="✖ Input Value Error"
    // this.style['border'] = '1px solid red'
    elementChange(errormessage_zipcode,'approval','reject')
  
  }
})

inputtel.addEventListener('change',function(e){
  console.log('paste')
  if(validate(this)['result']){
    errormessage_tel.textContent="✓"
    // this.style['border'] = '1px solid green'
    elementChange(errormessage_tel,'reject','approval')
  }else{
    errormessage_tel.textContent="✖ Input Value Error"
    // this.style['border'] = '1px solid red'
    elementChange(errormessage_tel,'approval','reject')
  }
})

inputlangage.addEventListener('change',function(e) {
  if(validate(this)['result']){
    errormessage_langage.textContent="✓"
    elementChange(errormessage_langage,'reject','approval')
  }else{
    errormessage_langage.textContent="✖ Input Value Error"
    elementChange(errormessage_langage,'approval','reject')
  }
})

inputcoun.addEventListener('change',function(e) {
  if(validate(this)['result']){
    errormessage_coun.textContent="✓"
    elementChange(errormessage_coun,'reject','approval')
  }else{
    errormessage_coun.textContent="✖ Input Value Error"
    elementChange(errormessage_coun,'approval','reject')
  }
})


//form送信前、バリデーションチェック
formss.addEventListener('submit',function(e){
  
  // e.preventDefault()
  const inputmei_val = validate(inputmei) 
  const inputmyou_val = validate(inputmyou)
  const inputzipcode_val = validate(inputzipcode)
  const inputtel_val = validate(inputtel)
  const inputlangage_val = validate(inputlangage)
  const inputcoun_val = validate(inputcoun)
  
  

  if(inputmei_val['result'] === false){
    e.preventDefault()
    if (inputmei_val['type'] === 'valueMissing'){
      errormessage_mei.textContent="✖ 必須項目を入力して下さい"
      elementChange(errormessage_mei,'approval','reject')

    } else if(inputmei_val['type'] === 'typeMismatch'){
      errormessage_mei.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_mei,'approval','reject')

    } else{

      errormessage_mei.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_mei,'approval','reject')
    }

  
  }
  if(inputmyou_val['result'] === false){
    e.preventDefault()
    if (inputmyou_val['type'] === 'valueMissing'){
      errormessage_myou.textContent="✖ 必須項目を入力して下さい"
      elementChange(errormessage_myou,'approval','reject')

    } else if(inputcoun_val['type'] === 'typeMismatch'){
      errormessage_myou.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_myou,'approval','reject')

    } else{
      errormessage_myou.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_myou,'approval','reject')

    }
  }


  if(inputzipcode_val['result'] === false){
    e.preventDefault()
    if (inputzipcode_val['type'] === 'valueMissing'){
      errormessage_zipcode.textContent="✖ 必須項目を入力して下さい"
      elementChange(errormessage_zipcode,'approval','reject')

    } else if(inputzipcode_val['type'] === 'typeMismatch'){
      errormessage_zipcode.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_zipcode,'approval','reject')

    } else{
      errormessage_zipcode.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_zipcode,'approval','reject')

    }
  }


  if(inputtel_val['result'] === false){
    e.preventDefault()
    if (inputtel_val['type'] === 'valueMissing'){
      errormessage_tel.textContent="✖ 必須項目を入力して下さい"
      elementChange(errormessage_tel,'approval','reject')

    } else if(inputtel_val['type'] === 'typeMismatch'){
      errormessage_tel.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_tel,'approval','reject')

    } else{
      errormessage_tel.textContent="入力した値を確認して下さい"
      elementChange(errormessage_tel,'approval','reject')

    }
  }


  if(inputlangage_val['result'] === false){
    e.preventDefault()
    if (inputlangage_val['type'] === 'valueMissing'){
      errormessage_langage.textContent="✖ 必須項目を入力して下さい"
      elementChange(errormessage_langage,'approval','reject')

    } else if(inputlangage_val['type'] === 'typeMismatch'){
      errormessage_langage.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_langage,'approval','reject')

    } else{
      errormessage_langage.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_langage,'approval','reject')
      
    }
  }


  if(inputcoun_val['result'] === false){
    e.preventDefault()
    if (inputcoun_val['type'] === 'valueMissing'){
      errormessage_coun.textContent="✖ 必須項目を入力して下さい"
      elementChange(errormessage_coun,'approval','reject')

    } else if(inputcoun_val['type'] === 'typeMismatch'){
      errormessage_coun.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_coun,'approval','reject')

    } else{
      errormessage_coun.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_coun,'approval','reject')

    }
  }
})


//validate function
function validate(inputElement){
  if(inputElement.validity.valid){
    return {result:true,type:''}
  }
  else if(!inputElement.validity.valid){

    if(inputElement.validity.valueMissing){
      return {result:false,type:'valueMissing'}

    } else if (inputElement.validity.typeMismatch) {
        return {result:false,type:'typeMismatch'}

    } else{
      return {result:false,type:''}

    }
  }
}

function elementChange(element,removeClass,addClass){
  element.classList.remove(removeClass)
  element.classList.add(addClass)
  return element
}