function Validate() {
    let rp = document.querySelector(".rpassword");
    let p = document.querySelector(".password");
    let r = document.querySelector(".rules");
    if (r.value == "on" && p.value == rp.value) {
        document.querySelector("form").submit();
    }
    return false;
}
