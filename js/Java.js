document.write(Date());

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function myData(data)
{
	if(data=="btn1")
	{
		document.getElementById("image1").src="../images/elep.jpg";
		document.getElementById("para").innerHTML="The Sri Lankan elephant is one of the three types of Asian elephants.The country has the largest concentration of elephants and most visitors to the island go on an elephant watching safari or visit an elephant orphanage. Elephants are important and sacred animals in Sri Lanka and are protected. It is not recommended to ride an elephant with a wooden seat since this hurts the elephants, nor is it recommended to chase them in a jeep when encountered on the road. Elephants can be seen in most of the national parks, and the place where the big gathering takes place is in Minneriya National Park.";
	}

else if(data=="btn2")
	{
		document.getElementById("image1").src="../images/leop.jpg";
		document.getElementById("para").innerHTML="The Sri Lankan leopard has a tawny or rusty yellow coat with dark spots and close-set rosettes, which are smaller than in Indian leopards.The Sri Lankan leopard has allegedly evolved to become a rather large leopard subspecies, because it is an apex predator without competition by other large wild cat species in the country. Large males reach almost 100Kg. Melanistic leopards are rare. Only four records exist, from Mawuldeniya, Pitadeniya and Nallathanniya.In October 2019, the Department of Wildlife Conservation recorded live footage of melanistic individuals for the first time, reportedly documenting four different animals one female, one male, and two cubs. ";
	}

else if(data=="btn3")
	{
		document.getElementById("image1").src="../images/spotted.jpg";
		document.getElementById("para").innerHTML="The Sri Lankan axis deer (Axis axis ceylonensis) or Ceylon spotted deer is a subspecies of axis deer (Axis axis) that inhabits only Sri Lanka. The name chital is not used in Sri Lanka. Its validity is disputed, and some maintain that the axis deer is monotypic. The herds are quite large and populated. Visitors can find spotted deer in all of the national parks.";
		
	}

else if(data=="btn4")
	{
		document.getElementById("image1").src="../images/mon.jpg";
		document.getElementById("para").innerHTML="The toque macaque monkeys are the most common monkeys seen in Sri Lanka. They are separated into dry zone, wet zone and highland and their physical difference is in the shape of their toque style hair.  ";
	}
else if(data=="btn5")
	{
		document.getElementById("image1").src="../images/lan.jpg";
		document.getElementById("para").innerHTML="The tufted gray langur (Semnopithecus priam), also known as Madras gray langur, and Coromandel sacred langur, is an Old World monkey, one of the species of langurs. This, like other gray langurs, is mainly a leaf-eating monkey. It is found in southeast India and Sri Lanka. ";
	}
else if(data=="btn6")
	{
		document.getElementById("image1").src="../images/be.jpg";
		document.getElementById("para").innerHTML="The Sri Lankan sloth bear (Melursus ursinus inornatus) is a subspecies of the sloth bear which is found mainly in lowland dry forests in the island of Sri Lanka.Being omnivorous, it feeds on nuts, berries, and roots, as well as carrion and meat. One of its main staples is insects, which it removes from rotting stumps and trees with its long, hairless snout. Otherwise, it rarely kills animals. The sloth bear is sympatric with the leopard.";
	}
else if(data=="btn7")
	{
		document.getElementById("image1").src="../images/peacock.jpg";
		document.getElementById("para").innerHTML="Peacocks are native to India and Sri Lanka and are considered some of the most beautiful and sacred animals. Unfortunately, since the female of the species is not as colorful as the males, they have been hunted indiscriminately for their meat. Some hotels have peacocks and peafowl in their gardens. ";
	}
else if(data=="btn8")
	{
		document.getElementById("image1").src="../images/cock.jpg";
		document.getElementById("para").innerHTML="The Sri Lankan junglefowl, also known as the Ceylon junglefowl, is a member of the Galliformes bird order which is endemic to Sri Lanka, where it is the national bird. It is closely related to the red junglefowl, the wild junglefowl from which the chicken was domesticated.";
	}	
}

