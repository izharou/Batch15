function biodatadata(nama1,umur1){
  
  let vlist_school = [
  {
    name: "SMAN 4 Depok",
    year_in : 2013,
    year_out : 2016,
    major : "IPA"
  },
  {
    name: "Politeknik LP3I",
    year_in : 2016,
    year_out : 2019,
    major : "Manajemen Informatika"
  }
];

let skillz = [
  {
    skill_name: "troubleshooting hardware",
    level : "advanced"
  },
  {
    skill_name: "programming",
    level : "Medium"
  }
];

var biodata =
    {
     name : "Fauzi",
     age : 22,
     address : "jl. Koja No.5 ,Kelurahan Cisalak Pasar, Kecamatan Cimanggis,Kota Depok",
     hobbies :  ["Banana", "Orange", "Apple", "Mango"],
     is_married : false,
     list_school : vlist_school,
     skills : skillz,
     interest_in_coding : true

    }

return biodata = JSON.stringify(biodata);

}


console.log(biodatadata("fauzi",21));
