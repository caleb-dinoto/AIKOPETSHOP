function getBotResponse(input, threadStatus) {
    if(threadStatus == "none" || threadStatus == undefined){
        if (input == "1" || input == "satu") {
            let response = "Baik! Jenis perawatan? <br><br> 1. Basic Grooming <br> 2. Treatment Jamur <br> 3. Cutting <br> 4. Special Coat <br> 5. Lengkap (Basic + Treatment Jamur + Cutting) <br> 6. Keluar";
            var threadNow = "PilihPerawatan";

            return [response, threadNow];
        }else if (input == "halo" || input == "hello") {
            let response = "Halo, nama saya Aiko! Mohon tanya sesuatu dengan memasukkan angka.";

            return [response, threadNow];
        }else if (input == ""){
            let response = defaultresponse;

            return [response, threadNow];
        }else if(input == "2" || input == "dua"){
            let response = "Kami buka setiap hari dari jam 09.00 - 20.00, kecuali pada hari libur nasional.";

            return [response, threadNow];
        }else if(input == "3" || input == "tiga"){
            let response = "<a href='https://www.instagram.com/aiko.petshop2020'>@aiko.petshop2020</a> di Instagram.";

            return [response, threadNow];
        }else if(input == "4" || input == "empat"){
            let response = "Ruko BOLSENA Blok E-03 Paramount Gading Serpong, Tangerang, Banten";

            return [response, threadNow];
        }
    }

    //I don't like everything after this.
    if(threadStatus == "PilihPerawatan"){
        if(input == "1" || input == "satu"){
            jenisPerawatan = "Basic Grooming";
        }else if(input == "2" || input == "dua"){
            jenisPerawatan = "Treatment Jamur";
        }else if(input == "3" || input == "tiga"){
            jenisPerawatan = "Cutting";
        }else if(input == "4" || input == "empat"){
            jenisPerawatan = "Special Coat";
        }else if(input == "5" || input == "lima"){
            jenisPerawatan = "Paket Lengkap";
        }else{
            let response = defaultresponse;
            threadNow = "none";
            return [response, threadNow];
        }

        let response = "Baik! Kamu memilih " + jenisPerawatan + ". Lalu, untuk berat peliharaan anda? <br><br> 1. Small (0 - 5.7 Kg) <br> 2. Medium (5.8 - 15.6 Kg) <br> 3. Large (15.7 - 31 Kg)<br> 4. Extra Large (Lebih dari 31.1 Kg) <br> 5. Keluar";
        threadNow = "PilihBeratHewan";
        return [response, threadNow];
    }

    if(threadStatus == "PilihBeratHewan"){
        if(input == "1" || input == "satu"){
            ukuranService = "Small";
        }else if(input == "2" || input == "dua"){
            ukuranService = "Medium";
        }else if(input == "3" || input == "tiga"){
            ukuranService = "Large";
        }else if(input == "4" || input == "empat"){
            ukuranService = "Extra Large";
        }else{
            let response = defaultresponse;
            threadNow = "none";
            return [response, threadNow];
        }

        if(jenisPerawatan == "Basic Grooming"){
            if(ukuranService == "Small"){
                hargaTotal = "160";
            }else if(ukuranService == "Medium"){
                hargaTotal = "180";
            }else if (ukuranService == "Large"){
                hargaTotal = "205";
            }else if(ukuranService == "Extra Large"){
                hargaTotal = "235";
            }
        }else if(jenisPerawatan == "Treatment Jamur"){
            if(ukuranService == "Small"){
                hargaTotal = "130";
            }else if(ukuranService == "Medium"){
                hargaTotal = "140";
            }else if (ukuranService == "Large"){
                hargaTotal = "150";
            }else if(ukuranService == "Extra Large"){
                hargaTotal = "160";
            }
        }else if(jenisPerawatan == "Cutting"){
            if(ukuranService == "Small"){
                hargaTotal = "165";
            }else if(ukuranService == "Medium"){
                hargaTotal = "170";
            }else if (ukuranService == "Large"){
                hargaTotal = "180";
            }else if(ukuranService == "Extra Large"){
                hargaTotal = "185";
            }
        }else if(jenisPerawatan == "Special Coat"){
            if(ukuranService == "Small"){
                hargaTotal = "30";
            }else if(ukuranService == "Medium"){
                hargaTotal = "35";
            }else if (ukuranService == "Large"){
                hargaTotal = "40";
            }else if(ukuranService == "Extra Large"){
                hargaTotal = "45";
            }
        }else if(jenisPerawatan == "Paket Lengkap"){
            if(ukuranService == "Small"){
                hargaTotal = "455";
            }else if(ukuranService == "Medium"){
                hargaTotal = "490";
            }else if (ukuranService == "Large"){
                hargaTotal = "535";
            }else if(ukuranService == "Extra Large"){
                hargaTotal = "580";
            }
        }

        let response2 = defaultresponse;
        let response = "Jenis Perawatan: " + jenisPerawatan + "<br>Ukuran Perawatan: " + ukuranService + "<br><br>Maka, total harga grooming adalah: " + hargaTotal + ".000 Rp" + "<br><br>-----------------------<br><br>" + response2;
        threadNow = "none";

        return [response, threadNow];
    }    
}