const cbxDepartamento = document.getElementById('busqueda')
cbxDepartamento.addEventListener('change',getDISTRITOS)

const cbxDistrito = document.getElementById('Distrito')

function fetchAndSetData(url, formData, targetElement){
    return fetch(url,{
        method: "POST",
        body: formData,
        mode: 'cors'
    })
    .then (response => response.json())
    .then (data =>{
        targetElement.innerHTML = data 
    })
    .catch(err => console.log(err))
}

function getDISTRITOS(){
    let estado = cbxDepartamento.value
    let url = 'PHP/getDistritos.php'
    let formData = new FormData()
    formData.append('id_departamento', estado)

    fetchAndSetData(url, formData, cbxDistrito)
}