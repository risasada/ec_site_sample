//zipcode-API
window.onload = function(){

  const serchButton =  document.getElementsByClassName('sarch2')[0]
  serchButton.addEventListener('click',async(e)=>{
    const input_text = await document.getElementsByClassName('s-zipcode')[0].value
    callApi(input_text);
  }) 
}


async function callApi(inputZipcode) {
  
  const res = await fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${inputZipcode}`);
  const result = await res.json();
  console.log(result)
};