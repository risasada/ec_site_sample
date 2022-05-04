const formss = document.getElementsByClassName('forminput')[0]
const input_size= document.getElementById('size')
const errormessage_size = document.querySelector('#size + span.error')


formss.addEventListener('submit',function(e){
  
  // e.preventDefault()
  const inputsize_val = validate(input_size)
  
  if(inputsize_val['result'] === false){
    e.preventDefault()
    if (inputsize_val['type'] === 'valueMissing'){
      errormessage_size.textContent="✖ サイズを選択して下さい"
      elementChange(errormessage_size,'approval','reject')

    } else if(inputsize_val['type'] === 'typeMismatch'){
      errormessage_size.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_size,'approval','reject')

    } else{

      errormessage_size.textContent="✖ 入力した値を確認して下さい"
      elementChange(errormessage_size,'approval','reject')
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