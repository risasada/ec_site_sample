const inputmei = document.getElementById('mei')

const inputmyou = document.getElementById('myou')

const inputemail = document.getElementById('email')

const inputbefore_password = document.getElementById('before-password')

const inputafter_password = document.getElementById('after-password')

const submitButton = document.getElementsByClassName('mepage-submit-button')[0]

const formss = document.getElementsByClassName('formmm')[0]


formss.addEventListener('submit',function(e) {
  
   alert('ff')
  const inputmei_val = validate(inputmei) 
  const inputmyou_val = validate(inputmyou)
  const inputemail_val = validate(inputemail)
  const inputbefore_password_val = validate(inputbefore_password)
  const inputafter_password_val = validate(inputafter_password)

  if(inputmei_val['result'] === false){
    e.preventDefault()
    if (inputmei_val['type'] === 'valueMissing'){
      inputmei.nextElementSibling.textContent="✖ 必須項目を入力して下さい"
      elementChange(inputmei.nextElementSibling,'approval','reject')

    } else if(inputmei_val['type'] === 'typeMismatch'){
      inputmei.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
      elementChange(inputmei.nextElementSibling,'approval','reject')

    } else{

      inputmei.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
      elementChange(inputmei.nextElementSibling,'approval','reject')
    }

  }

  if(inputmyou_val['result'] === false){
    e.preventDefault()
    if (inputmyou_val['type'] === 'valueMissing'){
      inputmyou.nextElementSibling.textContent="✖ 必須項目を入力して下さい"
      elementChange(inputmyou.nextElementSibling,'approval','reject')

    } else if(inputmyou_val['type'] === 'typeMismatch'){
      inputmyou.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
      elementChange(inputmyou.nextElementSibling,'approval','reject')

    } else{

      inputmyou.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
      elementChange(inputmyou.nextElementSibling,'approval','reject')
    }

  }

  if(inputemail_val['result'] === false){
    e.preventDefault()
    if (inputemail_val['type'] === 'valueMissing'){
      inputemail.nextElementSibling.textContent="✖ 必須項目を入力して下さい"
      elementChange(inputemail.nextElementSibling,'approval','reject')

    } else if(inputemail_val['type'] === 'typeMismatch'){
      inputemail.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
      elementChange(inputemail.nextElementSibling,'approval','reject')

    } else{

      inputemail.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
      elementChange(inputemail.nextElementSibling,'approval','reject')
    }

  }
  
})  


//入力時バリデーション
inputmei.addEventListener('change',function(e){
  console.log('paste')
  if(validate(this)['result']){
    // errormessage_mei.textContent="✓"

    this.nextElementSibling.textContent="✓"
    // this.style['border'] = '1px solid green'
    elementChange(this.nextElementSibling,'reject','approval')
  }else{
    this.nextElementSibling.textContent="✖ Input Value Error"
    // this.style['border'] = '1px solid red'
    elementChange(this.nextElementSibling,'approval','reject')
  }
})

inputmyou.addEventListener('change',function(e){
  console.log('paste')
  if(validate(this)['result']){
    // errormessage_mei.textContent="✓"

    this.nextElementSibling.textContent="✓"
    // this.style['border'] = '1px solid green'
    elementChange(this.nextElementSibling,'reject','approval')
  }else{
    this.nextElementSibling.textContent="✖ Input Value Error"
    // this.style['border'] = '1px solid red'
    elementChange(this.nextElementSibling,'approval','reject')
  }
})

inputemail.addEventListener('change',function(e){
  console.log('paste')
  if(validate(this)['result']){
    // errormessage_mei.textContent="✓"

    this.nextElementSibling.textContent="✓"
    // this.style['border'] = '1px solid green'
    elementChange(this.nextElementSibling,'reject','approval')
  }else{
    this.nextElementSibling.textContent="✖ Input Value Error"
    // this.style['border'] = '1px solid red'
    elementChange(this.nextElementSibling,'approval','reject')
  }
})

inputbefore_password.addEventListener('change',function(e){
  console.log('paste')
  if(validate(this)['result']){
    // errormessage_mei.textContent="✓"

    this.nextElementSibling.textContent="✓"
    // this.style['border'] = '1px solid green'
    elementChange(this.nextElementSibling,'reject','approval')
  }else{
    this.nextElementSibling.textContent="✖ Input Value Error"
    // this.style['border'] = '1px solid red'
    elementChange(this.nextElementSibling,'approval','reject')
  }
})

inputafter_password.addEventListener('change',function(e){
  console.log('paste')
  if(validate(this)['result']){
    // errormessage_mei.textContent="✓"

    this.nextElementSibling.textContent="✓"
    // this.style['border'] = '1px solid green'
    elementChange(this.nextElementSibling,'reject','approval')
  }else{
    this.nextElementSibling.textContent="✖ Input Value Error"
    // this.style['border'] = '1px solid red'
    elementChange(this.nextElementSibling,'approval','reject')
  }
})

// formds.addEventListener('submit',function(e){

//   console.log('ss')
//   const inputmei_val = validate(inputmei) 
//   const inputmyou_val = validate(inputmyou)
//   const inputzipcode_val = validate(inputzipcode)
//   const inputtel_val = validate(inputtel)
//   const inputlangage_val = validate(inputlangage)
//   const inputcoun_val = validate(inputcoun)

//   if(inputmei_val['result'] === false){
//     e.preventDefault()
//     if (inputmei_val['type'] === 'valueMissing'){
//       inputmei.nextElementSibling.textContent="✖ 必須項目を入力して下さい"
//       elementChange(inputmei.nextElementSibling,'approval','reject')

//     } else if(inputmei_val['type'] === 'typeMismatch'){
//       inputmei.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
//       elementChange(inputmei.nextElementSibling,'approval','reject')

//     } else{

//       inputmei.nextElementSibling.textContent="✖ 入力した値を確認して下さい"
//       elementChange(inputmei.nextElementSibling,'approval','reject')
//     }

//   }
// })


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