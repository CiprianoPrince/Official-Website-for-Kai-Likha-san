/** @format */

export function toastNotification(
  toastNotificationStatus,
  toastNotificationTitle,
  toastNotificationText,
  toastNotificationTimeout = 2500,
  toastNotificationPosition = "",
  toastNotificationType = 1
) {
  new Notify({
    status: toastNotificationStatus, //
    title: toastNotificationTitle,
    text: toastNotificationText,
    effect: "slide",
    speed: 300,
    customClass: null,
    customIcon: null,
    showIcon: true,
    showCloseButton: true,
    autoclose: true,
    autotimeout: toastNotificationTimeout,
    gap: 20,
    distance: 20,
    type: toastNotificationType,
    position: "right top",
  });
}

export function removeFormInputs(id) {
  $(`${id}`).trigger("reset");
}

export function removeInputValidation() {
  $(":input").removeClass("is-valid, is-invalid");
  // $(":input").removeClass("is-invalid");
  return;
}

export function toggleInputValidation(id, status) {
  if (status == "valid") {
    $(`${id}`).removeClass("is-invalid");
    $(`${id}`).addClass("is-valid");
    return;
  }

  if (status == "invalid") {
    $(`${id}`).removeClass("is-valid");
    $(`${id}`).addClass("is-invalid");
    return;
  }
}

export function getFileExtension(filename) {
  return filename.substring(filename.lastIndexOf(".") + 1, filename.length) || filename;
}

export function titleCase(str) {
  var splitStr = str.toLowerCase().split(" ");
  for (var i = 0; i < splitStr.length; i++) {
    // You do not need to check if i is larger than splitStr length, as your for does that for you
    // Assign it back to the array
    splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
  }
  // Directly return the joined string
  return splitStr.join(" ");
}

export function removeArrayvalue(array, value) {
  return array.filter(function (index) {
    return index != value;
  });
}

export function truncateString(str, num = 23) {
  if (str.length > num) {
    return str.slice(0, num) + "...";
  } else {
    return str;
  }
}

let maximumQty = "";

export function checkMaxQuantity() {
  // const currentUrl = new URL(location.href);
  // const productSlug = currentUrl.searchParams.get("product");
  const productSlug = $('#js-product-name').text();
  $.ajax({
    type: "POST",
    url: "./helpers/h-check-max-quantity.php",
    data: {
      productSlug: productSlug,
    },
    dataType: "json",
    success: function (data) {
      maximumQty = data.max_quantity;
    },
  });
};

export function checkAddCartQuantity(num) {
  if (num === "") {
    num = 1;
  }
  let minimunQty = 1;
  // maximumQty = parseInt(maximumQty);
  const parsed = parseInt(num);
  $("#js-add-to-cart-qty").val(Math.min(Math.max(parsed, minimunQty), maximumQty));
}

let interval = null;

export function updateAddCartQuantity(status, num) {
  if (status) {
    interval = setInterval(() => {
      num++;
      $("#js-add-to-cart-qty").val(num);
      checkAddCartQuantity($("#js-add-to-cart-qty").val());
    }, 100);
  } else {
    if (interval) clearInterval(interval);
  }
}

export function updateRemoveCartQuantity(status, num) {
  if (status) {
    interval = setInterval(() => {
      num--;
      $("#js-add-to-cart-qty").val(num);
      checkAddCartQuantity($("#js-add-to-cart-qty").val());
    }, 100);
  } else {
    if (interval) clearInterval(interval);
  }
}

export function checkMyCartQuantity(num, maximumQty) {
  if (num == "") {
    num = 1;
  }
  let minimunQty = 1;
  const parsed = parseInt(num);
  $(this).val(Math.min(Math.max(parsed, minimunQty), maximumQty));
}
// export function sleep(milliseconds) {
//   const date = Date.now();
//   let currentDate = null;
//   do {
//     currentDate = Date.now();
//   } while (currentDate - date < milliseconds);
// }

// (async () => {
//   const res = await fetch(`https://api.github.com/users/jameshibbard`);
//   const json = await res.json();
//   console.log(json.public_repos);
//   console.log("Hello!");
// })();
