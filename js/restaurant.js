function runActivity() {
  let items = ["potato", "cooking oil", "eggs", "bacon"];

  function showItems() {
    for (let i = 0; i < items.length; i++) {
      console.log(items[i]);
    }
  }

  function addItem(item) {
    items.push(item);
    console.log("Added " + item + " to items list");
  }

  addItem("milk");
  addItem("pineaple");
  showItems();
  console.log("Number of item: " + getItemCount());
}
