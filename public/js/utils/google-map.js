export const InitGoogleMap = () => {
  const uluru = { lat: 10.757944, lng: 106.666110 };
  const map = new google.maps.Map(document.querySelector(".map"), {
    zoom: 18,
    center: uluru,
  });
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}