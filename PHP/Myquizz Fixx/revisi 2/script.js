function cek_jawaban (){
    const monumen = document.querySelector('#monumen')
    const monumen_response = document.querySelector('#monumen_response')

    const pohon = document.querySelector('#pohon')
    const pohon_response = document.querySelector('#pohon_response')

    const reog = document.querySelector('#reog')
    const reog_response = document.querySelector('#reog_response')

    if (monumen.value == 'Eiffel' || monumen.value == 'eiffel'){
        monumen_response.innerHTML = 'Selamat Jawaban Anda Benar'
        monumen_response.style = "color:green"
    }
    else {
        monumen_response.innerHTML = 'Maaf, Jawaban Anda Salah'
        monumen_response.style = "color:red"
    }

    if (pohon.value == 'Cemara' || pohon.value == 'cemara'){
        pohon_response.innerHTML = 'Selamat Jawaban Anda Benar'
        pohon_response.style = "color:green"
    }
    else {
        pohon_response.innerHTML = 'Maaf, Jawaban Anda Salah'
        pohon_response.style = "color:red"
    }

    if (reog.value == 'Ponorogo' || reog.value == 'ponorogo'){
        reog_response.innerHTML = 'Selamat Jawaban Anda Benar'
        reog_response.style = "color:green"
    }
    else {
        reog_response.innerHTML = 'Maaf, Jawaban Anda Salah'
        reog_response.style = "color:red"
    }
}
