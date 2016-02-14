
// Dropdown from park to building
                        function selectedPark() {
                                var e = document.getElementById("park");
                                var selected = e.options[e.selectedIndex].text;
                                
                                if(selected == "Any"){
                                    document.getElementById("buildings").innerHTML = "<select class='form-control' id='any' name='building'>      <option>Any</option>                                                                                     <option>Clyde Williams</option>                                                                          <option>Sir John Beckwith</option>                                                                      <option>Ann Packer</option>                                                                             <option>Lboro Design School</option>                                                                          <option>Edward Barnsley</option>                                                                       <option>John Cooper</option>                                                                        <option>Matthew Arnold</option>                                                                             <option>Schofield</option>                                                                      <option>Brockington</option>                                                                            <option>James France (CC)</option>                                                                      <option>James France (D)</option>                                                                            <option>G Block</option>                                                                                   <option>Wavy Top</option>                                                                           <option>Edward Herbert</option>                                                                               <option>Haslegrave</option>                                                                                    <option>Stewart Mason</option>                                                                  <option>Brockington Extension</option>                                                                        <option>Any</option>                                                                                    <option>John Pickford</option>                                                                          <option>Keith Green</option>                                                                            <option>Sir Frank Gibb</option>                                                                 <option>IPTME</option>                                                                                  <option>Wolfson</option>                                                                                <option>Sir David Davies</option></select>";
                                }
                                else if(selected == 'East'){
                                    document.getElementById("buildings").innerHTML = "<select class='form-control' id='east' name='building'>     <option>Any</option>                                                                                        <option>Clyde Williams</option>                                                                                <option>Sir John Beckwith</option>                                                                          <option>Ann Packer</option>                                                                             <option>Lboro Design School</option>                                                                <option>Edward Barnsley</option>                                                                        <option>John Cooper</option>                                                                        <option>Matthew Arnold</option>                                                                         </select>"; 
                                }
                                else if(selected == 'Central'){
                                    document.getElementById("buildings").innerHTML = "<select class='form-control' id='central' name='building'> <option>Any</option>                                                                        <option>Schofield</option>                                                                          <option>Brockington</option>                                                                            <option>James France (CC)</option>                                                                           <option>James France (D)</option>                                                                              <option>G Block</option>                                                                                <option>Wavy Top</option>                                                                           <option>Edward Herbert</option>                                                                               <option>Haslegrave</option>                                                                         <option>Stewart Mason</option>                                                                      <option>Brockington Extension</option>                                                                  </select>";
                                }
                                else if(selected == 'West'){
                                    document.getElementById("buildings").innerHTML = "<select class='form-control' id='west' name='building'>     <option>Any</option>                                                                              <option>John Pickford</option>                                                                     <option>Keith Green</option>                                                                            <option>Sir Frank Gibb</option>                                                                 <option>IPTME</option>                                                                                  <option>Wolfson</option>                                                                                <option>Sir David Davies</option>                                                                           </select>"
                                }
                            }

//SLIDER

function outputUpdate(vol) {
	document.querySelector('#students').value = vol;
}

function sliderUpdate(vol) {
    document.querySelector('#slider').value = vol;
}

function outputUpdate2(vol) {
	document.querySelector('#students2').value = vol;
}

function sliderUpdate2(vol) {
    document.querySelector('#slider2').value = vol;
}
