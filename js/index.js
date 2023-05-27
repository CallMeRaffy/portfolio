const onLoad = () => {
    const formData = new FormData();
    formData.append("job", "getProfile");
    axios({
        url: "./api/profile.php",
        method: "post",
        data: formData,
    }).then((response) => {
        const profileDetails = response.data;
        console.log(profileDetails);
        profileDetails.forEach((details) => {
            var userFirstName = document.getElementById("firstName");
            userFirstName.textContent = details.pro_firstname;
            console.log(userFirstName);
        });
        
    });

      

}
onLoad();