const toggleBtn = document.getElementById("themeToggle") as HTMLButtonElement;

toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    document.body.classList.toggle("light");
});