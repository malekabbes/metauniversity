const shopImages = [
  {
    url: "https://tr.rbxcdn.com/e14f39a800317e1822eaa8aebd0f933b/420/420/LayeredAccessory/Png",
    name: "Girl Uniform",
    description: "A beautiful girl uniform for school",
    price: "100",
  },
  {
    url: "https://tr.rbxcdn.com/6d4f9b1d14078c5379781dc6ea28fa3e/150/150/Hat/Png",
    name: "Thug glasses",
    description: "Thug glasses for fun",
    price: "250",
  },
  {
    url: "https://tr.rbxcdn.com/b24aabb301681284680856b107a014d8/420/420/Hat/Png",
    name: "Graduation Hat",
    description: "a graduation hat for celebration",
    price: "550",
  },
  {
    url: "https://tr.rbxcdn.com/a99e06734278b84fd7a5e3607168fdac/420/420/Hat/Png",
    name: "COLD STARE SKATEBOARD",
    description: "a cool skateboard you can show off with ",
    price: "1200",
  },
];
function template(image) {
  const xpIcon = "./assets/images/xp.svg";

  console.log({ image });
  return `

        <div class="con-star">
            <i class='bx bx-star'></i>
        </div>
        <div class="con-image">
            <img class="img" src="${image.url}" alt="">
            <img class="bg" src="${image.url}" alt="">
        </div>

        <div class="con-text">
            <h3>
                ${image.name}
            </h3>
            <p>
                ${image.description}
            </p>
        </div>

        <div class="con-price">
            <span class="priceIcon">${image.price} <img src="${xpIcon}"></img></span>
        </div>

        <div class="con-btn">
            <Button onclick="handleAdd(event)" class="add">
                Add to cart
            </Button>

            <div class="con-input-btns">
                <Button onclick="plusLess(event, 'less')" class="less">
                    <i class='bx bx-minus' ></i>
                </Button>
                <input value="1" type="text">
                <Button onclick="plusLess(event, 'plus')" class="plus">
                    <i class='bx bx-plus'></i>
                </Button>
            </div>
     

        `;
}

for (image of shopImages) {
  const element = document.createElement("div");
  element.classList.add("card");
  element.innerHTML = template(image);
  document.querySelector(".con-cards-1").appendChild(element);
}

function handleAdd(event) {
  const card = event.target.closest(".card");
  card.classList.add("add-active");
  console.log(card);
}

function plusLess(event, type) {
  const card = event.target.closest(".card");
  const input = card.querySelector("input");
  let oldVal = Number(input.value);
  if (type == "less") {
    if (oldVal == 1) {
      card.classList.remove("add-active");
      return;
    }
    input.value = oldVal -= 1;
  } else {
    input.value = oldVal += 1;
  }
}
