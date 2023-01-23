"use strict";

{
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("click", () => {
      checkbox.parentNode.submit();
    });
  });
}
