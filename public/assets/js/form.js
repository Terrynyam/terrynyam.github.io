const map = {
    "DVD": "dvd_attributes",
    "Book": "book_attributes",
    Furniture: "furniture_attributes"
  };
  
  function prodType(value) {
    document
      .querySelectorAll(".fieldbox")
      .forEach((node) => (node.style.display = "none"));
  
    document.getElementById(map[value]).style.display = "block";
  }