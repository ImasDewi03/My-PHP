function cek_jawaban (){
    const monumen = document.querySelector('#monumen')
    const monumen_response = document.querySelector('#monumen_response')

    const pohon = document.querySelector('#pohon')
    const pohon_response = document.querySelector('#pohon_response')

    const reog = document.querySelector('#reog')
    const reog_response = document.querySelector('#reog_response')

    const presiden = document.querySelector('#presiden')
    const presiden_response = document.querySelector('#presiden_response')

    const ibukota = document.querySelector('#ibukota')
    const ibukota_response = document.querySelector('#ibukota_response')

 

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

    if (presiden.value == 'Soekarno' || presiden.value == 'soekarno'){
        presiden_response.innerHTML = 'Selamat Jawaban Anda Benar'
        presiden_response.style = "color:green"
    }
    else {
        presiden_response.innerHTML = 'Maaf, Jawaban Anda Salah'
        presiden_response.style = "color:red"
    }

    if (ibukota.value == 'Surabaya' || ibukota.value == 'surabaya'){
        ibukota_response.innerHTML = 'Selamat Jawaban Anda Benar'
        ibukota_response.style = "color:green"
    }
    else {
        ibukota_response.innerHTML = 'Maaf, Jawaban Anda Salah'
        ibukota_response.style = "color:red"
    }

}
