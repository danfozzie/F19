//DROP DOWN AREA1+BUILD1

function configureDropDownLists(addl1, bddl1) {
    var west = new Array('Any', 'Keith Green', 'John Pickford', 'IPTME');
    var central = new Array('Any', 'Schofield', 'Brockington', 'James France');
    var east = new Array('Any', 'Clyde Williams', 'Sir John Beckwith', 'John Cooper', 'Matthew Arnold');

    switch (addl1.value) {
        case 'West':
            bddl1.options.length = 0;
            for (i = 0; i < west.length; i++) {
                createOption(bddl1, west[i], west[i]);
            }
            break;
        case 'Central':
            bddl1.options.length = 0; 
        for (i = 0; i < central.length; i++) {
            createOption(bddl1, central[i], central[i]);
            }
            break;
        case 'East':
            bddl1.options.length = 0;
            for (i = 0; i < east.length; i++) {
                createOption(bddl1, east[i], east[i]);
            }
            break;
            default:
                bddl1.options.length = 0;
            break;
    }

}

//DROP DOWN BUILD1+ROOM1

function configureDropDownLists2(bddl1,rddl1) {
    var clydeWilliams = new Array('Any', 'HE.0.10', 'HE.0.21', 'HE.0.23', 'HE.0.26');
    var sirJohnBeckwith = new Array('Any', 'JB.0.21');
    var johnCooper = new Array('Any', 'YY.0.01');
    var matthewArnold = new Array('Any', 'ZZ.1.03', 'ZZ.1.05', 'ZZ.1.06');
    var schofield = new Array('Any', 'SCH.0.01', 'SCH.1.01', 'SCH.1.05');
    var brockington = new Array('Any', 'B.1.11');
    var jamesFrance = new Array('Any', 'CC.0.11', 'CC.0.12', 'CC.0.13', 'DD.1.02');
    var keithGreen = new Array('Any', 'KG.1.07', 'KG.1.09', 'KG.1.11', 'KG.1.12');
    var johnPickford = new Array('Any', 'HH.0.23', 'HH.0.23a');
    var IPTME = new Array('Any', 'S.0.04', 'S.0.06', 'S.1.73', 'S.1.74');
    

    switch (bddl1.value) {
        case 'Clyde Williams':
            rddl1.options.length = 0;
            for (i = 0; i < clydeWilliams.length; i++) {
                createOption(rddl1, clydeWilliams[i], clydeWilliams[i]);
            }
            break;
        case 'Sir John Beckwith':
            rddl1.options.length = 0; 
        for (i = 0; i < sirJohnBeckwith.length; i++) {
            createOption(rddl1, sirJohnBeckwith[i], sirJohnBeckwith[i]);
            }
            break;
        case 'John Cooper':
            rddl1.options.length = 0;
            for (i = 0; i < johnCooper.length; i++) {
                createOption(rddl1, johnCooper[i], johnCooper[i]);
            }
            break;
        case 'Matthew Arnold':
            rddl1.options.length = 0;
            for (i = 0; i < matthewArnold.length; i++) {
                createOption(rddl1, matthewArnold[i], matthewArnold[i]);
            }
            break;
        case 'Schofield':
            rddl1.options.length = 0; 
        for (i = 0; i < schofield.length; i++) {
            createOption(rddl1, schofield[i], schofield[i]);
            }
            break;
        case 'Brockington':
            rddl1.options.length = 0;
            for (i = 0; i < brockington.length; i++) {
                createOption(rddl1, brockington[i], brockington[i]);
            }
            break;
        case 'James France':
            rddl1.options.length = 0; 
        for (i = 0; i < jamesFrance.length; i++) {
            createOption(rddl1, jamesFrance[i], jamesFrance[i]);
            }
            break;
        case 'Keith Green':
            rddl1.options.length = 0;
            for (i = 0; i < keithGreen.length; i++) {
                createOption(rddl1, keithGreen[i], keithGreen[i]);
            }
            break;
        case 'John Pickford':
            rddl1.options.length = 0;
            for (i = 0; i < johnPickford.length; i++) {
                createOption(rddl1, johnPickford[i], johnPickford[i]);
            }
            break;
        case 'IPTME':
            rddl1.options.length = 0; 
        for (i = 0; i < IPTME.length; i++) {
            createOption(rddl1, IPTME[i], IPTME[i]);
            }
            break;
            default:
                rddl1.options.length = 0;
            break;
    }
}

//DROP DOWN AREA2+BUILD2

function configureDropDownLists(addl2, bddl2) {
    var west = new Array('Any', 'Keith Green', 'John Pickford', 'IPTME');
    var central = new Array('Any', 'Schofield', 'Brockington', 'James France');
    var east = new Array('Any', 'Clyde Williams', 'Sir John Beckwith', 'John Cooper', 'Matthew Arnold');

    switch (addl2.value) {
        case 'West':
            bddl2.options.length = 0;
            for (i = 0; i < west.length; i++) {
                createOption(bddl2, west[i], west[i]);
            }
            break;
        case 'Central':
            bddl2.options.length = 0; 
        for (i = 0; i < central.length; i++) {
            createOption(bddl2, central[i], central[i]);
            }
            break;
        case 'East':
            bddl2.options.length = 0;
            for (i = 0; i < east.length; i++) {
                createOption(bddl2, east[i], east[i]);
            }
            break;
            default:
                bddl2.options.length = 0;
            break;
    }

}

//DROP DOWN BUILD2+ROOM2

function configureDropDownLists2(bddl2,rddl2) {
    var clydeWilliams = new Array('Any', 'HE.0.10', 'HE.0.21', 'HE.0.23', 'HE.0.26');
    var sirJohnBeckwith = new Array('Any', 'JB.0.21');
    var johnCooper = new Array('Any', 'YY.0.01');
    var matthewArnold = new Array('Any', 'ZZ.1.03', 'ZZ.1.05', 'ZZ.1.06');
    var schofield = new Array('Any', 'SCH.0.01', 'SCH.1.01', 'SCH.1.05');
    var brockington = new Array('Any', 'B.1.11');
    var jamesFrance = new Array('Any', 'CC.0.11', 'CC.0.12', 'CC.0.13', 'DD.1.02');
    var keithGreen = new Array('Any', 'KG.1.07', 'KG.1.09', 'KG.1.11', 'KG.1.12');
    var johnPickford = new Array('Any', 'HH.0.23', 'HH.0.23a');
    var IPTME = new Array('Any', 'S.0.04', 'S.0.06', 'S.1.73', 'S.1.74');
    

    switch (bddl2.value) {
        case 'Clyde Williams':
            rddl2.options.length = 0;
            for (i = 0; i < clydeWilliams.length; i++) {
                createOption(rddl2, clydeWilliams[i], clydeWilliams[i]);
            }
            break;
        case 'Sir John Beckwith':
            rddl2.options.length = 0; 
        for (i = 0; i < sirJohnBeckwith.length; i++) {
            createOption(rddl2, sirJohnBeckwith[i], sirJohnBeckwith[i]);
            }
            break;
        case 'John Cooper':
            rddl2.options.length = 0;
            for (i = 0; i < johnCooper.length; i++) {
                createOption(rddl2, johnCooper[i], johnCooper[i]);
            }
            break;
        case 'Matthew Arnold':
            rddl2.options.length = 0;
            for (i = 0; i < matthewArnold.length; i++) {
                createOption(rddl2, matthewArnold[i], matthewArnold[i]);
            }
            break;
        case 'Schofield':
            rddl2.options.length = 0; 
        for (i = 0; i < schofield.length; i++) {
            createOption(rddl2, schofield[i], schofield[i]);
            }
            break;
        case 'Brockington':
            rddl2.options.length = 0;
            for (i = 0; i < brockington.length; i++) {
                createOption(rddl2, brockington[i], brockington[i]);
            }
            break;
        case 'James France':
            rddl2.options.length = 0; 
        for (i = 0; i < jamesFrance.length; i++) {
            createOption(rddl2, jamesFrance[i], jamesFrance[i]);
            }
            break;
        case 'Keith Green':
            rddl2.options.length = 0;
            for (i = 0; i < keithGreen.length; i++) {
                createOption(rddl2, keithGreen[i], keithGreen[i]);
            }
            break;
        case 'John Pickford':
            rddl2.options.length = 0;
            for (i = 0; i < johnPickford.length; i++) {
                createOption(rddl2, johnPickford[i], johnPickford[i]);
            }
            break;
        case 'IPTME':
            rddl2.options.length = 0; 
        for (i = 0; i < IPTME.length; i++) {
            createOption(rddl2, IPTME[i], IPTME[i]);
            }
            break;
            default:
                rddl2.options.length = 0;
            break;
    }
}

//DROP DOWN AREA3+BUILD3

function configureDropDownLists(addl3, bddl3) {
    var west = new Array('Any', 'Keith Green', 'John Pickford', 'IPTME');
    var central = new Array('Any', 'Schofield', 'Brockington', 'James France');
    var east = new Array('Any', 'Clyde Williams', 'Sir John Beckwith', 'John Cooper', 'Matthew Arnold');

    switch (addl3.value) {
        case 'West':
            bddl3.options.length = 0;
            for (i = 0; i < west.length; i++) {
                createOption(bddl3, west[i], west[i]);
            }
            break;
        case 'Central':
            bddl3.options.length = 0; 
        for (i = 0; i < central.length; i++) {
            createOption(bddl3, central[i], central[i]);
            }
            break;
        case 'East':
            bddl3.options.length = 0;
            for (i = 0; i < east.length; i++) {
                createOption(bddl3, east[i], east[i]);
            }
            break;
            default:
                bddl3.options.length = 0;
            break;
    }

}

//DROP DOWN BUILD3+ROOM3

function configureDropDownLists2(bddl3,rddl3) {
    var clydeWilliams = new Array('Any', 'HE.0.10', 'HE.0.21', 'HE.0.23', 'HE.0.26');
    var sirJohnBeckwith = new Array('Any', 'JB.0.21');
    var johnCooper = new Array('Any', 'YY.0.01');
    var matthewArnold = new Array('Any', 'ZZ.1.03', 'ZZ.1.05', 'ZZ.1.06');
    var schofield = new Array('Any', 'SCH.0.01', 'SCH.1.01', 'SCH.1.05');
    var brockington = new Array('Any', 'B.1.11');
    var jamesFrance = new Array('Any', 'CC.0.11', 'CC.0.12', 'CC.0.13', 'DD.1.02');
    var keithGreen = new Array('Any', 'KG.1.07', 'KG.1.09', 'KG.1.11', 'KG.1.12');
    var johnPickford = new Array('Any', 'HH.0.23', 'HH.0.23a');
    var IPTME = new Array('Any', 'S.0.04', 'S.0.06', 'S.1.73', 'S.1.74');
    

    switch (bddl3.value) {
        case 'Clyde Williams':
            rddl3.options.length = 0;
            for (i = 0; i < clydeWilliams.length; i++) {
                createOption(rddl3, clydeWilliams[i], clydeWilliams[i]);
            }
            break;
        case 'Sir John Beckwith':
            rddl3.options.length = 0; 
        for (i = 0; i < sirJohnBeckwith.length; i++) {
            createOption(rddl3, sirJohnBeckwith[i], sirJohnBeckwith[i]);
            }
            break;
        case 'John Cooper':
            rddl3.options.length = 0;
            for (i = 0; i < johnCooper.length; i++) {
                createOption(rddl3, johnCooper[i], johnCooper[i]);
            }
            break;
        case 'Matthew Arnold':
            rddl3.options.length = 0;
            for (i = 0; i < matthewArnold.length; i++) {
                createOption(rddl3, matthewArnold[i], matthewArnold[i]);
            }
            break;
        case 'Schofield':
            rddl3.options.length = 0; 
        for (i = 0; i < schofield.length; i++) {
            createOption(rddl3, schofield[i], schofield[i]);
            }
            break;
        case 'Brockington':
            rddl3.options.length = 0;
            for (i = 0; i < brockington.length; i++) {
                createOption(rddl3, brockington[i], brockington[i]);
            }
            break;
        case 'James France':
            rddl3.options.length = 0; 
        for (i = 0; i < jamesFrance.length; i++) {
            createOption(rddl3, jamesFrance[i], jamesFrance[i]);
            }
            break;
        case 'Keith Green':
            rddl3.options.length = 0;
            for (i = 0; i < keithGreen.length; i++) {
                createOption(rddl3, keithGreen[i], keithGreen[i]);
            }
            break;
        case 'John Pickford':
            rddl3.options.length = 0;
            for (i = 0; i < johnPickford.length; i++) {
                createOption(rddl3, johnPickford[i], johnPickford[i]);
            }
            break;
        case 'IPTME':
            rddl3.options.length = 0; 
        for (i = 0; i < IPTME.length; i++) {
            createOption(rddl3, IPTME[i], IPTME[i]);
            }
            break;
            default:
                rddl3.options.length = 0;
            break;
    }
}

//CAPACITY DROP DOWNS

function configureDropDownListsC(rddl1,cddl1) {
    var he010 = new Array('104');
    var he021 = new Array('50');
    var he023 = new Array('60');
    var he026 = new Array('48');
    
    var jb021 = new Array('100');
    
    var yy001 = new Array ('68');
    
    var zz103 = new Array('25');
    var zz105 = new Array('30');
    var zz106 = new Array('64');
    
    var sch001 = new Array('102');
    var sch101 = new Array('117');
    var sch105 = new Array('55');

    var b111 = new Array('80');
    
    var cc011 = new Array('280');
    var cc012 = new Array('234');
    var cc013 = new Array('201');
    var dd102 = new Array('54');
    
    var kg107 = new Array('48');
    var kg109 = new Array('48');
    var kg111 = new Array('24');
    var kg112 = new Array('24');
    
    var hh023 = new Array ('40');
    var hh023a = new Array('30');
    
    var s004 = new Array('106');
    var s006 = new Array('40');
    var s173 = new Array('53');
    var s174 = new Array('57');    

    switch (rddl1.value) {
            
        case 'HE.0.10':
            cddl1.options.length = 0;
            for (i = 0; i < he010.length; i++) {
                createOption(cddl1, he010[i], he010[i]);
            }
            break;
        case 'HE.0.21':
            cddl1.options.length = 0; 
        for (i = 0; i < he021.length; i++) {
            createOption(cddl1, he021[i], he021[i]);
            }
            break;
        case 'HE.0.23':
            cddl1.options.length = 0;
            for (i = 0; i < he023.length; i++) {
                createOption(cddl1, he023[i], he023[i]);
            }
            break;
        case 'HE.0.26':
            cddl1.options.length = 0;
            for (i = 0; i < he026.length; i++) {
                createOption(cddl1, he026[i], he026[i]);
            }
            break;
            
            
        case 'JB.0.21':
            cddl1.options.length = 0; 
        for (i = 0; i < jb021.length; i++) {
            createOption(cddl1, jb021[i], jb021[i]);
            }
            break;
            
            
        case 'YY.0.01':
            cddl1.options.length = 0;
            for (i = 0; i < yy001.length; i++) {
                createOption(cddl1, yy001[i], yy001[i]);
            }
            break;
            
            
        case 'ZZ.1.03':
            cddl1.options.length = 0;
            for (i = 0; i < zz103.length; i++) {
                createOption(cddl1, zz103[i], zz103[i]);
            }
            break;
        case 'ZZ.1.05':
            cddl1.options.length = 0; 
        for (i = 0; i < zz105.length; i++) {
            createOption(cddl1, zz105[i], zz105[i]);
            }
            break;
        case 'ZZ.1.06':
            cddl1.options.length = 0;
            for (i = 0; i < zz106.length; i++) {
                createOption(cddl1, zz106[i], zz106[i]);
            }
            break;
            
            
        case 'SCH.0.01':
            cddl1.options.length = 0;
            for (i = 0; i < sch001.length; i++) {
                createOption(cddl1, sch001[i], sch001[i]);
            }
            break;
        case 'SCH.1.01':
            cddl1.options.length = 0; 
        for (i = 0; i < sch101.length; i++) {
            createOption(cddl1, sch101[i], sch101[i]);
            }
            break;
        case 'SCH.1.05':
            cddl1.options.length = 0;
            for (i = 0; i < sch105.length; i++) {
                createOption(cddl1, sch105[i], sch105[i]);
            }
            break;

        case 'B.1.11':
            cddl1.options.length = 0; 
        for (i = 0; i < b111.length; i++) {
            createOption(cddl1, b111[i], b111[i]);
            }
            break;
            
            
        case 'CC.0.11':
            cddl1.options.length = 0;
            for (i = 0; i < cc011.length; i++) {
                createOption(cddl1, cc011[i], cc011[i]);
            }
            break;
        case 'CC.0.12':
            cddl1.options.length = 0; 
        for (i = 0; i < cc012.length; i++) {
            createOption(cddl1, cc012[i], cc012[i]);
            }
            break;
        case 'CC.0.13':
            cddl1.options.length = 0;
            for (i = 0; i < cc013.length; i++) {
                createOption(cddl1, cc013[i], cc013[i]);
            }
            break;
        case 'DD.1.02':
            cddl1.options.length = 0; 
        for (i = 0; i < dd102.length; i++) {
            createOption(cddl1, dd102[i], dd102[i]);
            }
            break;
            
            
        case 'KG.1.07':
            cddl1.options.length = 0;
            for (i = 0; i < kg107.length; i++) {
                createOption(cddl1, kg107[i], kg107[i]);
            }
            break;
        case 'KG.1.09':
            cddl1.options.length = 0; 
        for (i = 0; i < kg109.length; i++) {
            createOption(cddl1, kg109[i], kg109[i]);
            }
            break;
        case 'KG.1.11':
            cddl1.options.length = 0;
            for (i = 0; i < kg111.length; i++) {
                createOption(cddl1, kg111[i], kg111[i]);
            }
            break;
        case 'KG.1.12':
            cddl1.options.length = 0; 
        for (i = 0; i < kg112.length; i++) {
            createOption(cddl1, kg112[i], kg112[i]);
            }
            break;
            
            
        case 'HH.0.23':
            cddl1.options.length = 0;
            for (i = 0; i < hh023.length; i++) {
                createOption(cddl1, hh023[i], hh023[i]);
            }
            break;
        case 'HH.0.23a':
            cddl1.options.length = 0; 
        for (i = 0; i < hh023a.length; i++) {
            createOption(cddl1, hh023a[i], hh023a[i]);
            }
            break;
            
            
        case 'S.0.04':
            cddl1.options.length = 0;
            for (i = 0; i < s004.length; i++) {
                createOption(cddl1, s004[i], s004[i]);
            }
            break;
        case 'S.0.06':
            cddl1.options.length = 0; 
        for (i = 0; i < s006.length; i++) {
            createOption(cddl1, s006[i], s006[i]);
            }
            break;
        case 'S.1.73':
            cddl1.options.length = 0;
            for (i = 0; i < s173.length; i++) {
                createOption(cddl1, s173[i], s173[i]);
            }
            break;
        case 'S.1.74':
            cddl1.options.length = 0; 
        for (i = 0; i < s174.length; i++) {
            createOption(cddl1, s174[i], s174[i]);
            }
            break;    
        
            default:
                cddl1.options.length = 0;
            break;
    }
}

//MODULE OPTIONS

function configureDropDownListM(mddl,tddl) {

    var cob100 = new Array('Advanced Web Design');
    var cob101 = new Array('Requirements Engineering');
    var cob106 = new Array('Formal Languages and Theory of Computation');
    var cob107 = new Array('AI Methods');
    var cob108 = new Array('Knowledge-Based Decision Support');	
    var cob120 = new Array('Computer Graphics');
    var cob122 = new Array('Software Engineering 2');	
    var cob150 = new Array('Formal Specification');
    var cob155 = new Array('Mobile Application Development');
    var cob201 = new Array('Professional Issues in Computing');
    var cob231 = new Array('Operating Systems, Networks and the Internet 1');
    var cob232 = new Array('Operating Systems, Networks and the Internet 2');	
    var cob249 = new Array('Professional Training Preparation');	
    var cob290 = new Array('Team Projects');	
    var cob295 = new Array('Team Project');	
    var cob301 = new Array('Industrial Expertise');
    
    switch (mddl.value) {
    
        case 'COB100':
                tddl.options.length = 0; 
            for (i = 0; i < cob100.length; i++) {
                createOption(tddl, cob100[i], cob100[i]);
                }
                break;
        case 'COB101':
                tddl.options.length = 0; 
            for (i = 0; i < cob101.length; i++) {
                createOption(tddl, cob101[i], cob101[i]);
                }
                break;
        case 'COB106':
                tddl.options.length = 0; 
            for (i = 0; i < cob106.length; i++) {
                createOption(tddl, cob106[i], cob106[i]);
                }
                break;
        case 'COB107':
                tddl.options.length = 0; 
            for (i = 0; i < cob107.length; i++) {
                createOption(tddl, cob107[i], cob107[i]);
                }
                break;
        case 'COB108':
                tddl.options.length = 0; 
            for (i = 0; i < cob108.length; i++) {
                createOption(tddl, cob108[i], cob108[i]);
                }
                break;
        case 'COB120':
                tddl.options.length = 0; 
            for (i = 0; i < cob120.length; i++) {
                createOption(tddl, cob120[i], cob120[i]);
                }
                break;
        case 'COB122':
                tddl.options.length = 0; 
            for (i = 0; i < cob122.length; i++) {
                createOption(tddl, cob122[i], cob122[i]);
                }
                break;
        case 'COB150':
                tddl.options.length = 0; 
            for (i = 0; i < cob150.length; i++) {
                createOption(tddl, cob150[i], cob150[i]);
                }
                break;
        case 'COB155':
                tddl.options.length = 0; 
            for (i = 0; i < cob155.length; i++) {
                createOption(tddl, cob155[i], cob155[i]);
                }
                break;
        case 'COB201':
                tddl.options.length = 0; 
            for (i = 0; i < cob201.length; i++) {
                createOption(tddl, cob201[i], cob201[i]);
                }
                break;
        case 'COB231':
                tddl.options.length = 0; 
            for (i = 0; i < cob231.length; i++) {
                createOption(tddl, cob231[i], cob231[i]);
                }
                break;
        case 'COB232':
                tddl.options.length = 0; 
            for (i = 0; i < cob232.length; i++) {
                createOption(tddl, cob232[i], cob232[i]);
                }
                break;
        case 'COB249':
                tddl.options.length = 0; 
            for (i = 0; i < cob249.length; i++) {
                createOption(tddl, cob249[i], cob249[i]);
                }
                break;
        case 'COB290':
                tddl.options.length = 0; 
            for (i = 0; i < cob290.length; i++) {
                createOption(tddl, cob290[i], cob290[i]);
                }
                break;
        case 'COB295':
                tddl.options.length = 0; 
            for (i = 0; i < cob295.length; i++) {
                createOption(tddl, cob295[i], cob295[i]);
                }
                break;
        case 'COB301':
                tddl.options.length = 0; 
            for (i = 0; i < cob301.length; i++) {
                createOption(tddl, cob301[i], cob301[i]);
                }
                break;
                default:
                    tddl.options.length = 0;
                break;
            
    }
}

//DROP DOWN MULTIPLE ROOMS BUILDING

function configureDropDownListsMR(addl1, mbddl1) {
    var west = new Array('Any', 'Keith Green', 'John Pickford', 'IPTME');
    var central = new Array('Any', 'Schofield', 'Brockington', 'James France');
    var east = new Array('Any', 'Clyde Williams', 'Sir John Beckwith', 'John Cooper', 'Matthew Arnold');

    switch (addl1.value) {
        case 'West':
            mbddl1.options.length = 0;
            for (i = 0; i < west.length; i++) {
                createOption(mbddl1, west[i], west[i]);
            }
            break;
        case 'Central':
            mbddl1.options.length = 0; 
        for (i = 0; i < central.length; i++) {
            createOption(mbddl1, central[i], central[i]);
            }
            break;
        case 'East':
            mbddl1.options.length = 0;
            for (i = 0; i < east.length; i++) {
                createOption(mbddl1, east[i], east[i]);
            }
            break;
            default:
                mbddl1.options.length = 0;
            break;
    }

}

//DROP DOWN MULTIPLE ROOMS ROOM

function configureDropDownListsMRR(mbddl1,mrddl1) {
    var clydeWilliams = new Array('Any', 'HE.0.10', 'HE.0.21', 'HE.0.23', 'HE.0.26');
    var sirJohnBeckwith = new Array('Any', 'JB.0.21');
    var johnCooper = new Array('Any', 'YY.0.01');
    var matthewArnold = new Array('Any', 'ZZ.1.03', 'ZZ.1.05', 'ZZ.1.06');
    var schofield = new Array('Any', 'SCH.0.01', 'SCH.1.01', 'SCH.1.05');
    var brockington = new Array('Any', 'B.1.11');
    var jamesFrance = new Array('Any', 'CC.0.11', 'CC.0.12', 'CC.0.13', 'DD.1.02');
    var keithGreen = new Array('Any', 'KG.1.07', 'KG.1.09', 'KG.1.11', 'KG.1.12');
    var johnPickford = new Array('Any', 'HH.0.23', 'HH.0.23a');
    var IPTME = new Array('Any', 'S.0.04', 'S.0.06', 'S.1.73', 'S.1.74');
    

    switch (mbddl1.value) {
        case 'Clyde Williams':
            mrddl1.options.length = 0;
            for (i = 0; i < clydeWilliams.length; i++) {
                createOption(mrddl1, clydeWilliams[i], clydeWilliams[i]);
            }
            break;
        case 'Sir John Beckwith':
            mrddl1.options.length = 0; 
        for (i = 0; i < sirJohnBeckwith.length; i++) {
            createOption(mrddl1, sirJohnBeckwith[i], sirJohnBeckwith[i]);
            }
            break;
        case 'John Cooper':
            mrddl1.options.length = 0;
            for (i = 0; i < johnCooper.length; i++) {
                createOption(mrddl1, johnCooper[i], johnCooper[i]);
            }
            break;
        case 'Matthew Arnold':
            mrddl1.options.length = 0;
            for (i = 0; i < matthewArnold.length; i++) {
                createOption(mrddl1, matthewArnold[i], matthewArnold[i]);
            }
            break;
        case 'Schofield':
            mrddl1.options.length = 0; 
        for (i = 0; i < schofield.length; i++) {
            createOption(mrddl1, schofield[i], schofield[i]);
            }
            break;
        case 'Brockington':
            mrddl1.options.length = 0;
            for (i = 0; i < brockington.length; i++) {
                createOption(mrddl1, brockington[i], brockington[i]);
            }
            break;
        case 'James France':
            mrddl1.options.length = 0; 
        for (i = 0; i < jamesFrance.length; i++) {
            createOption(mrddl1, jamesFrance[i], jamesFrance[i]);
            }
            break;
        case 'Keith Green':
            mrddl1.options.length = 0;
            for (i = 0; i < keithGreen.length; i++) {
                createOption(mrddl1, keithGreen[i], keithGreen[i]);
            }
            break;
        case 'John Pickford':
            mrddl1.options.length = 0;
            for (i = 0; i < johnPickford.length; i++) {
                createOption(mrddl1, johnPickford[i], johnPickford[i]);
            }
            break;
        case 'IPTME':
            mrddl1.options.length = 0; 
        for (i = 0; i < IPTME.length; i++) {
            createOption(mrddl1, IPTME[i], IPTME[i]);
            }
            break;
            default:
                mrddl1.options.length = 0;
            break;
    }
}

//CREATE DROP DOWN

function createOption(ddl, text, value) {
    var opt = document.createElement('option');
    opt.value = value;
    opt.text = text;
    ddl.options.add(opt);
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
