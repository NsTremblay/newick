<?php
set_time_limit (2);
$newick="(KI658372:7.1884765625,(((ADBV01001119:2,HF958831:2):0,(EU643481:1.25,(HF965797:2,JH712158:2):1.25):0):0,
	((EU643482:4.5,JH712070:4.5):0,(ADBV01001393:1.40625,(HF957929:0.5,((KB201334:0.25,(ADBV01002688:1,GL380099:1):0.25):0,
		(EU643485:1.5, GL379786:1.5):0):0.5):1.40625):0):0):7.1884765625);";

//$newick = "(KI968966:5.80827163392837,((AHHD01000518:34.5,AHHD01000518-1:34.5):0,((JQ389500:35.5,KI964941:35.5):0,((JQ389494:33,KB933064:33):0,(KI911161:0.952892104197581,((JH793555:2.52563627758309,((AKHY01000194:25.5,DS231670-1:25.5):0,((CAGA01000044:0.403051965910578,(GG698489:0.646129890773498,((DS499597:2.25,(AKCT01000166:2,(JH650974:2.75,(AMYD01001514:15.5,GL385404:15.5):2.75):2):2.25):0,(AKCT01000074:0.746421662206075,(HF679029:0.607767395802352,((JH793161:2.0625,(JN186799:3.375,(HG792016:5.25,(EF633829:9,FQ311441:9):5.25):3.375):2.0625):0,((GG704912:7.25,(CACQ02001457:10.5,DS231669-1:10.5):7.25):0,((((DS231663:7,(CACQ02003420:6.5,DS990645:6.5):7):0,(DS231663-2:0.75,((CACQ02005057:10.5,HF679033:10.5):0,(DS499599-1:5.5,(AY884189:7.5,GL385396:7.5):5.5):0):0.75):0):0,((JH725169:1.36522836596305,((AY246697:2,(CACQ02001791:11,JH767570:11):2):0,(JARH01000413:0.566500448359875,(((BN001308-3:2.25,(AY928087:7.5,JARH01000005:7.5):2.25):0,(GQ331953:5.25,(BN000505:5,HF935394:5):5.25):0):0,((GG663383:5.5,(CACQ02000677:6,HF679023-1:6):5.5):0,((GL629735:3.25,(AY928088:5.5,DF126472:5.5):3.25):0,((JH717905:0.31881105658249,((EU886196:2.4375,(HF936373:2.5,(CACQ02001193:3.25,(GL698720-1:1.5,KE145363:1.5):3.25):2.5):2.4375):0,((HG792016-2:2.25,(CACQ02003452:4.5,JH650834:4.5):2.25):0,(((GG698487:2.25,(CACQ02005135:3.75,(GG692440:2,JH794360:2):3.75):2.25):0,(((GG697355:4,(AJ704622:2.5,GG698483-1:2.5):4):0,(FQ790270:2.75,(JH717906:0.875,(GG698528:2.75,(EU090010:1,GL385401:1):2.75):0.875):2.75):0):0,((((GG697356:1.46875,(DS499600-1:1.5,(HF679031-1:0.875,(CACQ02001275:1.75,(DS231666:1.5,GL891306:1.5):1.75):0.875):1.5):1.46875):0,((DS022245:1.15625,((HG792015-4:1.5,JH767578:1.5):0,(DQ860091:1.125,((JN182230:0.5,KB705518:0.5):0,(HG792023:1,KB456264:1):0):1.125):0):1.15625):0,((GG698485:0.875,((DS990636-1:1.5,KB932835:1.5):0,(AMYD01002999:1.5,(GL945482-3:1.5,HF679025:1.5):1.5):0):0.875):0,(((AY223812:2.5,(DS231663-3:2,KI968806:2):2.5):0,((DS499596-2:1.25,(JH795071:0.75,(AY604568:1,BAUL01000188:1):0.75):1.25):0,(DS499596:2.25,(DS544807:1.5,GG697361:1.5):2.25):0):0):0,((DS995720:2.625,(JARH01000487:1.25,(AZIL01001067:0,DQ486528:0):1.25):2.625):0,(JH650985:0.75,(CACQ02001017:3.5,HF679023:3.5):0.75):0):0):0):0):0):0,((DS995742:3.5,(AM409327:2.5,FQ790277:2.5):3.5):0,(((JH717850:3.5,KB446538:3.5):0,(AMYD01002279:3.25,(EQ999983-1:1,KB730206:1):3.25):0):0,((((GG697366:2.5,(AKCU01000511:1.5,GG663366:1.5):2.5):0,((AKHY01000151:1.5,DS022261:1.5):0,(AM270193:2.25,(AM270218-1:1.5,KE007241:1.5):2.25):0):0):0,((CAGI01000146:0.28125,(((ABDF02000005-1:0,GL538367:0):0,(AMYD01001299:1,KE145362:1):0):0,((ABDF02000075:1.5,ANIZ01002080:1.5):0,(ABDF02000081:1.5,KB644411-1:1.5):0):0):0.28125):0,((((AB720074:0,GL573200:0):0,(AM270395:2.5,(ABDF02000080:0,GL698590:0):2.5):0):0,((DF126448-2:0.2421875,((AKHY01000013:2,(AB525198:0,GL573332:0):2):0,((AP007169:0.625,(KE145356-1:0.5,(ACJE01000016:0,GL698718:0):0.5):0.625):0,(DF126486:1.5,(CAGI01000191:0,JN167225:0):1.5):0):0):0.2421875):0,(((DQ192518:2.625,(ABDG02000022:1,(AB457185:0.5,GL698498:0.5):1):2.625):0,(((DS995723:1.125,(ABDF02000047:1.25,(AKCT01000010:0.75,(ABDG02000014:0,GL698712-1:0):0.75):1.25):1.125):0,((DF126447-1:0.453125,((GG698479:1.25,(ABDF02000001-1:0,GL698560:0):1.25):0,((ACJE01000016-1:0,GL698763:0):0,(AM269971:1.25,(AB087617:0,GL380099:0):1.25):0):0):0.453125):0,((AFNW01000059:0.875,((AHHD01000324:0,GL698473:0):0,(ADBV01001119:0.5,AFNW01000073:0.5):0):0.875):0,(((DS022263:0.5,(GG697367:0.75,(ABDG02000010:0,GL636498:0):0.75):0.5):0,(DF126458:1.5,(ABDG02000023:0,GL945447:0):1.5):0):0,((AHHD01000160:0.375,(AGUE01000073:1.25,(ABDF02000065:0,GL698535:0):1.25):0.375):0,(DS995754:1.5,(ABDF02000001:1,AM270178:1):1.5):0):0):0):0):0):0,((CM002241:1.25,(ABDF02000006-1:0,GL698624:0):1.25):0,((ACJE01000005-2:0,GL891305:0):0,(ABDG02000025:1.25,(AB720726:0,GL636512:0):1.25):0):0):0):0):0,(((AKHY01000182-1:0.8125,(AFNW01000605:1,(AY700570:1.5,(ABDF02000005:0,GL698477:0):1.5):1):0.8125):0,((AM270010:1.25,(ABDG02000027-1:1.5,KB446544:1.5):1.25):0,((ABDF02000061:1,GG698497:1):0,(((ABDF02000082:0,GL636505:0):0,(AEVR02000014:0.5,(ABDG02000025-1:0,GL698727:0):0.5):0):0,(ACJE01000001:1.625,(ABDF02000074:0.75,(ABDF02000081-1:0,GL945482:0):0.75):1.625):0):0):0):0):0,((ACJE01000001-1:2,(ACJE01000009:0,GL698567:0):2):0,(DS022252:1.6875,(AKCT01000295:0.125,(AHHD01000005:1,(ADOT01000316:0,GL698757:0):1):0.125):1.6875):0):0):0):0):0):0,((AP007151:1,((ACJE01000008:0,GL698753:0):0,(ABDF02000079:1,DS499596-1:1):0):1):0,(((DS499594:0.75,(ACJE01000005:0,GL385400:0):0.75):0,(AFQF01002159:2,FQ790358:2):0):0,(ACJE01000006:1.1875,(ACJE01000015-2:1.875,(AP007154-3:2,(AB525200:0,GL698712:0):2):1.875):1.1875):0):0):0):0):0):0,((KB445581:0.875,(DF126460:2.5,(CACQ02002057:1,KB708015:1):2.5):0.875):0,(((JH226130:2.75,(AM270316:1.5,AQGS01000814:1.5):2.75):0,(KB644408:2.25,(AJ871177:2.5,DS499596-4:2.5):2.25):0):0,(((((KB908481-1:1.75,(ACJE01000015-3:2,DS022257:2):1.75):0,(AKHY01000108:1.625,(KB706678:1.25,(KB021290:1,KB726963:1):1.25):1.625):0):0,((HG792015:1,(JH717902:0,(AM779763:1.5,HG792020:1.5):0):1):0,(AQGS01000031:0.75,((JH717845-1:2,KB725756:2):0,((FQ790333:1,FQ790344:1):0,(AJ439610:1.5,JH725164:1.5):0):0):0.75):0):0):0,(((JH650837:1.375,(AY553235:2,(AMYD01001253:1,JH725220:1):2):1.375):0,((AP007162-1:2,KB020742:2):0,((AMYD01003129:1.5,DS231663-1:1.5):0,(BN001308-2:1.5,(AQGS01000479:1,JH717843:1):1.5):0):0):0):0,((((JH725171:1.75,(DS572755:1.5,JH717909:1.5):1.75):0,(DF126450:0.8125,((GL945485:1.5,JARH01000731:1.5):0,((CACQ02004244:1.5,KI914009:1.5):0,(EQ999973-1:1.5,GL945484:1.5):0):0):0.8125):0):0,((JH717896:0.375,((HG792015-2:1.5,(CAUH01000563:0.5,KI912119:0.5):1.5):0,(DS995740:2,KB446537:2):0):0.375):0,((((GG698500:0.625,(JH930471:1,(AYSA01000656:0.5,EU449979:0.5):1):0.625):0,((EF429246:1.5,KB726264:1.5):0,(JH725187:0.75,(JH711574:0.625,(HF957929:0.5,(JH717905-1:0.5,KB456265-1:0.5):0.5):0.625):0.75):0):0):0,(((FQ790352:1.5,KB469306:1.5):0,(JH711573:1,(AFQF01003027:1.5,DS231669:1.5):1):0):0,((AM270021:1.5,DS990637:1.5):0,(GG692422:2,JH794374:2):0):0):0):0,((((AY495599:1.5,JH650977:1.5):0,(GG749409:2,JH159156:2):0):0,((((FQ790293:1.5,KB445654:1.5):0,((BAUL01000239:0,CACQ02005102:0):0,(JH717848-2:0.5,KB445582:0.5):0):0):0,((JH719398:0.75,(AKHY01000182:0.5,EU643481:0.5):0.75):0,(JH717840:1.5,KI912113:1.5):0):0):0,((GL945482-2:0.75,(AJ884677:1.5,JH650843:1.5):0.75):0,((((GG749425:1,(AGNL01036200:0,AY495612:0):1):0,(KB446541:1,KE721140:1):0):0,(KI911144:0.625,((CAOJ01010646:0.5,KB445578:0.5):0,(HF958831:1,JH687382:1):0):0.625):0):0,((GG749409-1:1.25,(KB201334:0,KB726090:0):1.25):0,((KB726993:1.25,(DF126466:0,EU643482:0):1.25):0,(GG698503:1.5,GL945475:1.5):0):0):0):0):0):0):0,((GG749429:1,KB020707:1):0,(JH651014:0.53125,(((DF126448-1:0.5,GL698549:0.5):0,(AY928086:1,DS995755:1):0):0,((KI911142:1.5,(DF126514:0,KB446560:0):1.5):0,((DS022260:1,(ADBV01001393:0,KB445563:0):1):0,(KB707846:0.5,(BAUL01000250:1,DS022244:1):0.5):0):0):0):0.53125):0):0):0):0):0):0,(((BN001308:1.875,(GL636487:0.75,(AYSA01000161:1,JH651003:1):0.75):1.875):0,((CAGA01000011:3,JH711574-2:3):0,((AY495610:1,GG698484:1):0,((BAUL01000167:1,DF126472-1:1):0,(JH793022:0.625,(GL945482-1:0.5,(AY513580:0.5,HF679033-1:0.5):0.5):0.625):0):0):0):0):0,(((GG698483:1.5,(AY445825:1.5,DS990637-1:1.5):1.5):0,(BAUL01000094:1.75,(DS572750:1.5,HF679031:1.5):1.75):0):0,((((AKHY01000096:2.75,(ACJE01000019:0,GL698517:0):2.75):0,(((DS572727:1,GL698754:1):0,(AFQF01002297:1.5,GG697383:1.5):0):0,(((((ANIY01002535:1,FQ790287:1):0,((CM002242:0.25,(HF965797:0.75,(AFQF01001029:0,GL698734:0):0.75):0.25):0,(AWSO01000027:0.625,(HF679028:0.75,(ACJE01000004:0,GL573442:0):0.75):0.625):0):0):0,(((JH712070:0,KB725795:0):0,(AWSO01000525:1,DS022259:1):0):0,(BABT02000062:0.875,((AKCT01000216:0,GL636496:0):0,(AF304355:0.5,GG697427:0.5):0):0.875):0):0):0,(((AHHD01000532:1,FQ790337:1):0,(GL945436-2:2,KB456271:2):0):0,(((KB722656:0.5,(DS995733:1,(AKCT01000001:0,EU643485:0):1):0.5):0,(DS995735:1.5,GL945429:1.5):0):0,(((AF351825:1,(FQ790362:0,KB908592:0):1):0,(AWSO01000042:1,CAGA01000077:1):0):0,(JH650847:0.6875,((AGUE01000032:0,KC989570:0):0,(DF126448:0.5,(AFQF01004229:0.5,GL883131:0.5):0.5):0):0.6875):0):0):0):0):0,((GG698478:1.375,(DF126454:1.25,(ACJE01000010:0,GL698720:0):1.25):1.375):0,((DS022254:1,(GG697381:1,(AB525200-1:0,GL538364:0):1):1):0,((AP007166:2,(AF155773:0.5,GL833121:0.5):2):0,((DS022255:0.875,(ACJE01000002:0.75,(ABDF02000066:0,GL698732:0):0.75):0.875):0,((AKHY01000111:0.625,(AFNW01000311:1,(AB636315:0,GL698510:0):1):0.625):0,(BN001303:0.875,((AYSA01000272:0,GG697389:0):0,(AFRT01000474:1,(ADOT01000307:0,GL698783:0):1):0):0.875):0):0):0):0):0):0):0):0):0,(((AKCT01000160:1.5,DS572752:1.5):0,(EF601124:1.25,(GL379786:0.5,GL385397:0.5):1.25):0):0,(((HF679028-1:1,(AF469045:0,GL698504:0):1):0,(DS995724:1,JH792933-1:1):0):0,((KI912115:0.5,(DS995719:1.5,JH650828:1.5):0.5):0,((ANIX01002392:1.5,KE145371:1.5):0,(DS231670:1.25,(AKCT01000223:1,KB730323:1):1.25):0):0):0):0):0):0,(((AB723722:1,KB456263:1):0,(((KB644415:1.25,(ABDG02000027:1,KB733451:1):1.25):0,((JARH01000223:0.5,(KB908593:0.5,(AFNW01000290:0.5,KE546988:0.5):0.5):0.5):0,(KB726570:0.8125,(AP007154-1:0.125,(ABDF02000069:1,(AFQF01003043:0,JH712158:0):1):0.125):0.8125):0):0):0,((AKHY01000141:1.5,KB730299:1.5):0,(GL945438:1.5,JH687553:1.5):0):0):0):0,((GG704912-1:1,(ABDF02000006:2,(ACJE01000021-2:0,GL891307:0):2):1):0,((GG704911-1:1,(EF429247:1.5,JH725181-1:1.5):1):0,((AYSA01000662:0.5,KB445659:0.5):0,(KB725690:0.75,(GL945436-1:0.75,(AY884196:0.5,HF679027:0.5):0.75):0.75):0):0):0):0):0):0):0):0):0):0):0,((DS231664:1,(AF335329:2.5,(AKHY01000119:1.5,HF679030:1.5):2.5):1):0,(((JH651055:1,KE375213:1):0,(KC989564:2.5,KI911162:2.5):0):0,((AMYD01002186:2,KI693788:2):0,(AYSA01000038:1.375,(JH717848:1.25,(AKCU01000092:1,JH650971:1):1.25):1.375):0):0):0):0):0):0):0):0):0):0):0,((JH725154:0.5625,(DS499594-1:2.625,(AY884191:2.5,(DS995734:1,KB644411-3:1):2.5):2.625):0.5625):0,((((DF126488:2,DS995722:2):0,(AY884187:2.25,(JH650968:2,KB456270:2):2.25):0):0,(((JH650970:0.9375,((AMYD01001758:2.5,JH717904:2.5):0,(JH725162:1,(ANJA01002218:1.5,AYSA01000390:1.5):1):0):0.9375):0,((AYSA01000525:1.5,JH795140:1.5):0,(DF126461:2.25,(AY495600:1.5,DS995723-1:1.5):2.25):0):0):0,(DF126447:0.9375,((AY928085:3.5,JH930478:3.5):0,(JH725183:1.25,(GQ176852:2.5,JH717908:2.5):1.25):0):0.9375):0):0):0,(((GL385395:2.25,(AY495591:2,EQ999983:2):2.25):0,(CAGA01000016:0.875,((AY884190:1.5,JH650972:1.5):0,(DF126476:2.5,KB445812:2.5):0):0.875):0):0,(DF238796:0.75,((AY850378:2.5,(JH930478-2:0.75,(HF679031-2:1,JH650833:1):0.75):2.5):0,(GG698499:2.5,(EQ999973:2,JH650969:2):2.5):0):0.75):0):0):0):0):0):0):0,(((JH725174:2.1875,(JF826561:1.5,(CACQ02001666:2.5,(GG692422-1:1.5,KB456265:1.5):2.5):1.5):2.1875):0,(GG697333:0.40625,((GG698488:3.75,(CACQ02008956:2,KB707716:2):3.75):0,(GL698717:1.25,(EF456733:3,(GG663367:1.5,HF679026:1.5):3):1.25):0):0.40625):0):0,(((CACQ02001116:5,GL636500:5):0,(JN186800:0.625,(JH794681:2.875,(KB822711:2,(AY884194:1.5,JH650979:1.5):2):2.875):0.625):0):0,(((JH711789:0.6324462890625,(((JH717847:1.75,((ADBV01002688:0,CACQ02001988:0):0,(GL538373:1.5,KB730535:1.5):0):1.75):0,((JH650829:1.25,(EU045308:2.5,GL538364-1:2.5):1.25):0,(((EU253973:2,HG792015-3:2):0,(GL945436-3:2,JH711786:2):0):0,(((GL698711-1:1,JH717917:1):0,(GL891258:1.5,JARH01000888:1.5):0):0,(((EU886741:0.5,KB707858:0.5):0,(JARH01001022:0.5,KC989570-1:0.5):0):0,(GL698711:0.375,((AY929618:1,GL698717-1:1):0,(KE721204:0.125,(GG692436:0.375,(JATN01000319:0.5,(AY850377:0.5,KB707682-1:0.5):0.5):0.375):0.125):0):0.375):0):0):0):0):0):0,(JARH01000363:1.3125,((GG704911:1.5,KB916008:1.5):0,(DQ860090:1.5,(JATN01000310:1,JH725173:1):1.5):0):1.3125):0):0.6324462890625):0,((JARH01000561:1.625,(HE614122:1.5,(JH650852:1,(JH725153:1,KE145357-1:1):1):1.5):1.625):0,((HM243222:2.5,JH650827:2.5):0,(HG792015-1:1.75,(AY884193:3,JH711574-1:3):1.75):0):0):0):0,((((JH688107:2.5,JH717846:2.5):0,(JH725175:2,(GG698480:2,JH717898:2):2):0):0,(((DQ111025:3,KB446564:3):0,((DS995728:2,KB446545:2):0,(KB020526:2.5,KB725990:2.5):0):0):0,((AGUE01000069:2.5,JN121121:2.5):0,(KB456264-1:2.75,(JN167227:1.5,KB707421:1.5):2.75):0):0):0):0,((JH226135:3,(KI911166:1.5,(DQ111024:2,JH793978:2):1.5):3):0,(((JN182232:1.5,KI911143:1.5):0,(KI687177:1.5,KI964558:1.5):0):0,((GU294760:4,KI913160-1:4):0,(KB644408-1:2.75,(JN712209:2.5,KB644413:2.5):2.75):0):0):0):0):0):0):0):0):0):0):0.31881105658249):0,((HQ591508:1.5625,(GL698477-1:2.375,(JH792933:0.25,(FJ172507:6.5,JH725237:6.5):0.25):2.375):1.5625):0,((JH725157:3.1875,(CACQ02001354:1.75,(DS022249:3.25,(DS990636:1.5,KB021103:1.5):3.25):1.75):3.1875):0,((DF196790:9,GG692438:9):0,((FJ439897:0.796875,((CACQ02008912:2.75,(GG663382:1.5,JH650838:1.5):2.75):0,(GL698712-2:1.375,(KI913160:2.75,(DS499600:2,KB644411:2):2.75):1.375):0):0.796875):0,(DS995807:1.375,(JN121123:1.5,(AY884186:3,(GG704911-2:2.5,KB446543:2.5):3):1.5):1.375):0):0):0):0):0):0):0):0):0.566500448359875):0):1.36522836596305):0,(JH650830:0.84375,(DF196786:0.96875,((DF126447-2:6.75,(CACQ02003798:7.5,DF126466-2:7.5):6.75):0,((CACQ02006057:10,DS022256:10):0,((CACQ02005257:9,DS499596-3:9):0,(DF126466-1:4.75,(AY884188:7,DS572700:7):4.75):0):0):0):0.96875):0.84375):0):0):0,(JH717844:2.1357421875,(JH226133:1.08984375,((AM270351:12.5,JH793332:12.5):0,(JH717907:1.548828125,(((JH725181:0.8125,((JH688022:3.5,JH717903:3.5):0,(HQ830032:2.5,(JH717899:3,KI964773:3):2.5):0):0.8125):0,(JH725160:1.5,(DF238784:3.125,(AY850376:2.25,(HG792016-1:3,KB726020-1:3):2.25):3.125):1.5):0):0,((HM622670:3.75,(HE614121:4.5,KB021034:4.5):3.75):0,(JH650981:3.75,(CACQ02005436:5.5,KE721469:5.5):3.75):0):0):1.548828125):0):1.08984375):2.1357421875):0):0):0):0.607767395802352):0.746421662206075):0):0.646129890773498):0.403051965910578):0,(CAGA01000020:0.868942022323608,(DS022258:1.56786098517478,(((ABDF02000064:20.5,ACJE01000005-1:20.5):0,((AB191469:19.5,DS995763:19.5):0,((AFNW01000306:20,AHHD01000170:20):0,((AM270104:0.505063710734248,(((AHHD01000089:1.75,(AFQF01002406:12,AHHD01000300:12):1.75):0,(AKCU01000053:0.451015472412109,((AB720725:10.5,GL385398-1:10.5):0,((AB205145:3,(AKCU01000270:8.5,AWNI01000014:8.5):3):0,(AP007174-2:0.477690696716309,(((ABDF02000086:6.25,(AB525199:3.5,ACJE01000003:3.5):6.25):0,((AB720076:3,AHHD01000323:3):0,(((ABDF02000085:4.5,JH930478-1:4.5):0,((ABDG02000024:4.5,(ABDF02000068:1.5,ACJE01000019-1:1.5):4.5):0,(ACJE01000015-1:1.5,(JH793495:2.5,(ACJE01000010-1:2,GG663374:2):2.5):1.5):0):0):0,(AMYD01000423:5.75,(ABDF02000003:2.5,JH725151:2.5):5.75):0):0):0):0,(AMYD01000075:1.06447601318359,(((ABDG02000013:2.5,KB725656:2.5):0,(BN001308-1:1.625,(AY838877:1.375,(JH717841:4.25,(AY495608:1,BX284762:1):4.25):1.375):1.625):0):0,((((DF196768:2.375,(AP007174-1:3.25,(ABDF02000078:0,GL698485:0):3.25):2.375):0,(AM270053:1.25,(AGUE01000138:5.5,AM270079:5.5):1.25):0):0,(((AHHD01000387:0.578125,((AKCU01000427:2.75,(AFQF01001045:1.5,AM270241:1.5):2.75):0,(AKCT01000216-1:2.75,(AF368420:1.75,(AFNW01000279:1.5,JH687874:1.5):1.75):2.75):0):0.578125):0,((((AFNW01000059-1:0,GL698760:0):0,(AHHD01000467:2.75,(ABDG02000029:0,GL945436:0):2.75):0):0,((AFQF01003432:1.75,(AHHD01000109:1.75,(ABDG02000023-2:0,GL698592:0):1.75):1.75):0,(AFNW01000308:1.625,(DF126503:2,(AFQF01000176:1.25,(AFNW01000385:0,GL385398:0):1.25):2):1.625):0):0):0,(AKHY01000187:4,(ACJE01000021-1:2.75,(ABDF02000085-1:0,GL698484:0):2.75):4):0):0):0,((AB720075:0,GL698751:0):0,(AHHD01000177:4,(ABDG02000023-1:0,GL945493:0):4):0):0):0):0,((AKHY01000111-1:2.75,(AHHD01000609:2.5,(AKHY01000199-1:4,KB644414:4):2.5):2.75):0,(((AM270218:7,AMYD01003342:7):0,(((AJ704623:3.5,JH717849:3.5):0,(AKCT01000128:0.875,(AKHY01000150:3,(AFQF01005327:1,JH793063:1):3):0.875):0):0,((AFNW01000287:6,CAGI01000133:6):0,(AJ011964:1.625,(DS499599:2.5,(AKCU01000183:2,AYSA01000287:2):2.5):1.625):0):0):0):0,((((AKCT01000219:6,JH725213:6):0,((JARH01000691:3.25,(AM270165:2,KB707695:2):3.25):0,((KB446557:3,(AP007174:1.5,JH717848-1:1.5):3):0,(AJ884678:3,(AM270059:2,KB916847:2):3):0):0):0):0,(AM270352:2.0625,(CAGA01000029:0.75,(AP007169-1:3,(AGUE01000061:2,DS572712:2):3):0.75):2.0625):0):0,(((KB726136:2.75,(AF184074:2.5,AGUE01000116:2.5):2.75):0,(AFNW01000186:6,JH719423:6):0):0,((JH725161:1.375,((ABDG02000015:1,KE145370:1):0,(AFQF01003360:3,GL636488:3):0):1.375):0,(AHHD01000279:4.5,(AKCT01000174:1.5,JH717897:1.5):4.5):0):0):0):0):0):0):0):1.06447601318359):0):0.477690696716309):0):0):0.451015472412109):0):0,((AGUE01000179:14,GG697331:14):0,(BN001307:0.635009765625,(((AP007154-2:4.75,(AGUE01000110:8.5,DF238771:8.5):4.75):0,((AM270372:3.75,(DS231667:7.5,HE999559:7.5):3.75):0,((DF126468:2.5,(AP007154:9.5,FQ311463:9.5):2.5):0,(AP007162:1.375,((AWNI01000041:8.5,JARH01000529:8.5):0,(AHHD01000117:10.5,JH650841:10.5):0):1.375):0):0):0):0,((AM270265:0.5,(AKCT01000339:5,(AM270164:9,DS572704:9):5):0.5):0,((AKHY01000199:12.5,JN640285:12.5):0,(ACJE01000015:3.25,(AKHY01000199-2:6.25,(JH794254:4,KB733474:4):6.25):3.25):0):0):0):0.635009765625):0):0):0.505063710734248):0,((CAGA01000020-1:2.125,(ACJE01000021:4.5,(ACJE01000014:11,AHHD01000417:11):4.5):2.125):0,(AFNW01000079:18.5,AHHD01000564:18.5):0):0):0):0):0):0,((AHHD01000285:19.5,JH717845:19.5):0,(AKCU01000542:2.75,(AKCU01000169:17.5,KB915768:17.5):2.75):0):0):1.56786098517478):0.868942022323608):0):0):2.52563627758309):0,((KB916208:5.25,(JN805540:23,KB916027:23):5.25):0,((JH795365:2.23750305175781,((KI964231:16,KI964673:16):0,((KI968897:8.75,(KI981324:6.5,KI912110-1:6.5):8.75):0,((KI968886:1.734375,(KI964885:1.765625,((KI913958:2.375,(KI968888:4.5,(KI965253:2,KI966418:2):4.5):2.375):0,((KI913735:5,KI968708:5):0,(KI968759:4.5,(KI965096:1.5,KI968756:1.5):4.5):0):0):1.765625):1.734375):0,(((KE653506:1.322265625,(KI964864:3.52734375,(KI914022:1.13671875,(KC989568:1.9462890625,((KI968878:1.75,((KI658372:1.5,KI912110:1.5):0,(KI964135:2,(KC989581:1.5,KI968762:1.5):2):0):1.75):0,((KI912115-1:2.25,(KI680581:2,KI968728:2):2.25):0,((KB445723:0.75,((KI964862:1,KI966420:1):0,(KC989613:2,KI964850:2):0):0.75):0,(KI964846:2.25,(KC989569:2.5,KI966447:2.5):2.25):0):0):0):1.9462890625):1.13671875):3.52734375):1.322265625):0,(KI912109-1:4.25,(KC989584:12,KE652449:12):4.25):0):0,((KE652486:3.75,(KC989580:11.5,KI912117:11.5):3.75):0,((KI912109:4.25,(KE659010:8.5,KI964009:8.5):4.25):0,((KE652804:12,KB908703:12):0,(KC862269:13.5,KB916846:13.5):0):0):0):0):0):0):0):2.23750305175781):0,(KI911163:2.50851273757871,(KE652278:1.92080417278339,((JQ617286:15.5,KB822719:15.5):0,((JQ389496:17.5,KB705649:17.5):0,((JQ389502:12,KB445647:12):0,(KB446537-1:0.191723204567097,((((JH794596:12.5,KB916185:12.5):0,(JN613323:14,KB644408-3:14):0):0,(KB644410:10,(JQ389503:6,KE145353:6):10):0):0,(((KB725774:0.875,((JQ617285:10.5,KB915688:10.5):0,(KB908844:3.25,(JQ389501:7.5,KB705946:7.5):3.25):0):0.875):0,(((KB445589:3.5,(JQ973666:6,KB726012:6):3.5):0,(KB020659:4.25,(JQ698336:8,KB725997:8):4.25):0):0,((KB908866:4.75,(JX028829:8,KB915926:8):4.75):0,((JQ389495:10,KB445574:10):0,((KB915996:0.8125,(KB726218:2.375,(JQ389498:3.25,(KB706761:6,KE148148:6):3.25):2.375):0.8125):0,((((KB916760:9,KE145356:9):0,((KB456266-1:4,(JH795712:4.5,KC989563:4.5):4):0,(JN640289:0.9375,((JH793393:3.5,KB445640:3.5):0,(KI964590:4.75,(JN177500:2.5,KI964675:2.5):4.75):0):0.9375):0):0):0,((JQ389508:3.5,KE720726:3.5):0,(JN182229:3.125,(JN640287:3,(JN132403:3.5,KB916424:3.5):3):3.125):0):0):0,(((KI964032:3.5,(JQ698338:8,KB725848:8):3.5):0,((KB644410-1:5.25,(JX975482:4.5,KE361631:4.5):5.25):0,(KB733486:3.875,(KB020560:2.75,(JQ698337:3.5,KB445656:3.5):2.75):3.875):0):0):0,(((KB456267:0.25,((JQ655806:6,KB726020:6):0,(JX402754:5,(JQ582649:4,KB446542:4):5):0):0.25):0,(((KI963975:3.75,(JQ619524:4,KC989608:4):3.75):0,(((JQ617289:6,KB021008:6):0,((KB020528:3.75,(JH793683:2.5,KE145354:2.5):3.75):0,(KB644412:2.875,(KI440850:3.5,(JN712211:2,KC989610:2):3.5):2.875):0):0):0,((KB644414-1:3.25,(JN997437:2.25,(KB707922:2.5,KB916836:2.5):2.25):3.25):0,((JQ708193:5,KI545858:5):0,((((((JX103637:3.5,KB445581-1:3.5):0,(KB020815:2.75,(JQ619516:2,KB445573:2):2.75):0):0,(JX441995:1.046875,((JQ582645:3,KB020961:3):0,(KB446566:0.5625,((JN712215:2,KB707234:2):0,(KI911145:1.25,(JN132404:1,KB726281:1):1.25):0):0.5625):0):1.046875):0):0,((KB708022:3.25,(JH793049:2.5,KB730179:2.5):3.25):0,(KB020936:3.25,(JN712210:2.5,KB726307:2.5):3.25):0):0):0,((KI913126:1.25,(JX156417:3.5,(KB021386:2,KB445641:2):3.5):1.25):0,(((JQ582646:2,(KB020575:3,KB730325:3):2):0,(KB644411-2:2.25,(JQ619519:3.5,KI912111:3.5):2.25):0):0,(((KB822703-1:1.5,((KB445661:1.5,KB644415-1:1.5):0,(JQ617287:2.5,KI914010:2.5):0):1.5):0,((KI911158:2.125,(JQ619518:1.25,(KC989573:1,KE145357:1):1.25):2.125):0,((KB021020:3,KC989572:3):0,(KE145368:2,(JQ389497:2,KB445795:2):2):0):0):0):0,(KB021006:1.859375,(KB456266:0.59375,((KB707550:3,KI673874:3):0,(JQ582648:1.375,(KI913975:1.5,(KC989609:1,KE145373:1):1.5):1.375):0):0.59375):1.859375):0):0):0):0):0,((KB908481:1.8125,(JQ655804:1.875,(KI964876:1.25,(KB021264:2.5,KI968692:2.5):1.25):1.875):1.8125):0,(((KB730051:2.5,(JN997444:2.5,KB908482:2.5):2.5):0,((((KB456260:3,(JN177504:2.5,KB916836-1:2.5):3):0,((JH795187:3,KB726989:3):0,(((KB726991:1.75,(KB644408-4:0.75,(EF125025:1,KB445578-1:1):0.75):1.75):0,((JX308619:1.5,KB644409:1.5):0,(KB020530:3,KI440846:3):0):0):0,((JX273434:1.25,(KC439347:1,(DS544803:1.5,KE720961:1.5):1):1.25):0,((JH226131:2.5,KB908814:2.5):0,((CACQ02008528:0.5,KE503206:0.5):0,(KB445642:0.625,(KB707682:0.75,(KB445663:1,KI669597:1):0.75):0.625):0):0):0):0):0):0):0,((HQ141932:0.8125,(KI913177:1.5,(KI963934:1,(JH650918:1.5,JH717839:1.5):1):1.5):0.8125):0,((KI912121:1.5,(JN712213:2.5,KB730104:2.5):1.5):0,((JN121120:2,KB020814:2):0,(JX129225:2,KB445573-1:2):0):0):0):0):0,((JN132407:4,KB021171:4):0,(JQ708195:5,KB822703:5):0):0):0):0,(JH793857:0.875,(KB446555:4,(JQ389506:3,KB644408-2:3):4):0.875):0):0):0):0):0):0):0):0,((KB733456:2.125,(JN177506:2,(KB916118:3,(JN712212:2.5,KB730093:2.5):3):2):2.125):0,((JQ708194:4,(JQ619517:5.5,KB822715:5.5):4):0,((JQ655805:6.5,KB725795-1:6.5):0,(KB731258:5.5,(JQ389505:2.5,KB707804:2.5):5.5):0):0):0):0):0):0,((JN177502:8,KB916776:8):0,(JX402755:8,KB445561:8):0):0):0):0):0):0):0):0):0):0,((KB446561:5.75,(JQ389499:9,KB445657:9):5.75):0,(JX421684:7.25,(JQ655803:9,KB445644:9):7.25):0):0):0):0.191723204567097):0):0):0):1.92080417278339):2.50851273757871):0):0):0):0.952892104197581):0):0):0):5.80827163392837);";

//$newick = "(A:0.1,B:0.2,(C:0.3,D:0.4):0.5);";
$newick = str_replace(' ', '', $newick);
$newick = substr($newick, 1, -2);

class node{
	public $distance = 0;
	public $childrens = array(node);
	public $leafs = array(leaf);
	public $newickText="";
}

class leaf{
	public $distance=0;
	public $accession="";
}

class accessionsArray{
	public $accessions = array();
}

$startNode = new node();
$startNode->newickText = $newick;
reduce($startNode, 0);
$depth = 0;

function getAllAccessions($newick){
	$accessions = array();
	$fragments = explode(':', $newick);
	
	for ($i=0; $i < count($fragments); $i++) { 
		
		$lastIndex = strlen($fragments[$i])-1;
		$arr1 = str_split($fragments[$i]);
		

		while($arr1[$lastIndex]!='(' && $lastIndex!=0 && $arr1[$lastIndex]!=','){
			$lastIndex = $lastIndex - 1;
		}
		if($lastIndex==(strlen($fragments[$i])-1)){
			$fragments[$i] = substr($fragments[$i], 0, (strlen($fragments[$i])-1));			
		}else{
			$lastIndex = $lastIndex +1;
			$fragments[$i] = substr($fragments[$i], $lastIndex, (strlen($fragments[$i])-1));
		}
		if(substr_count($fragments[$i], '.')!=0||substr_count($fragments[$i], ')')){

		}else{
			array_push($accessions, $fragments[$i]);
		}
		
		
	}
	return $accessions;
}

function reduce($tempNode, $depth){
$depth = $depth+1;
//echo "<br><br>Depth ".$depth."<br>";
$tempNewick = $tempNode->newickText;
$arr1 = str_split($tempNewick);
$index =0;
$position = 0;
$childrenNodes = array();
$leafs = array();
//echo "<br>Input ".$tempNewick."<br>";
for ($i=0; $i < count($arr1); $i++) { 

	if($arr1[$i]=='('){
		$index = $index+1;
	}
	if($arr1[$i]==')'){
		$index = $index-1;
	}
	//echo $index."-".$arr1[$i].".".$i." depth".$depth."<br>";
	if(($index == 0 && $arr1[$i]==',')||$i==(count($arr1)-1)){

		$temp = substr($tempNewick, $position, $i);
		$split = explode(':', $temp);
		$distance = $split[count($split)-1];

		$temp = sanitizer($temp);
		//echo $temp." THis is temp<br>";
		$position = $i;

		//echo "<br>".$temp."...temp...Size ".strlen($temp)." Index ".$i." Depth ".$depth." Position".$position."<br><br>";
		if((substr_count($temp, '(')==0||substr_count($temp, ')')==0)&&strlen($temp)!=0&&substr_count($temp, ',')==0){
			
			$sides = explode(",", $temp);

			for ($b=0; $b < count($sides); $b++) { 
				
				$leaf = new leaf();
				$leaf->accession = $sides[$b];
				$leaf->distance = $distance;
				//echo $sides[$b]."-Depth".$depth."<br><br>";
				array_push($leafs, $leaf);
			}
			
		$tempNode->leafs = $leafs;

		}else if($temp==""){
			//Do nothing
		}else{

		$childrenNode = new node();
		$childrenNode->newickText = $temp;
		$childrenNode->distance = $distance;
		array_push($childrenNodes, $childrenNode);

		}
	}
}

//echo count($childrenNodes)."<br>";
//echo $tempNode->newickText." node text<br>";
$tempNode->childrens = $childrenNodes;
for ($i=0; $i < count($childrenNodes); $i++) { 
	reduce($childrenNodes[$i], $depth);
}
//echo count($childrenNodes);
}

//This sanitizer will remove the outer parenthesies and look out for scenarios
//1) one (
//2) one )
//3) There is one ( extra
//4) There is one ) extra
function sanitizer($noClean){

	$cleaned = "";
	$firstIndex=0;
	$lastIndex = 0;
	//already ok
	if((substr_count($noClean, '(')==0&&substr_count($noClean, ')')==0)){
		$noClean = str_replace(",", "", $noClean);
		return $noClean;
	
	}elseif ((substr_count($noClean, '(')==substr_count($noClean, ')'))&&substr_count($noClean, '(')!=0) {
		
		//remove one both from front and back
		$arr1 = str_split($noClean);
		$firstIndex=0;
		while($arr1[$firstIndex]!='('){
			$firstIndex = $firstIndex+1;
		}
		while($arr1[count($arr1)+$lastIndex-1]!=')'){
			$lastIndex = $lastIndex - 1;
		}

		$firstIndex = $firstIndex+1;
		$lastIndex = $lastIndex - 1;
		$cleaned = substr($noClean, $firstIndex, $lastIndex);
		return $cleaned;
	}
	
	
}




function getDistance($string){
	//make the search stop at :
	$arr1 = str_split($string);
	$firstIndex=count($arr1);
	while($arr1[$firstIndex]!=':'){
		$firstIndex = $firstIndex-1;
	}
	return substr($string, $firstIndex+1);
}


function countUnder($node, $index){
$nodes = $node->childrens;
for ($i=0; $i < count($nodes); $i++) { 
	$index = countUnder($nodes[$i], $index+1);
}
return $index;
}


?>



<html>

<body>

<svg version="1.1" viewBox="0 0 100% 100%" style="width:46%;height:90%;" id="svgBox">
	
	<?php 
		printLeafs($startNode, 0, 200, 1);

		function printLeafs ($printLeafNode, $x, $y){
			
			$scale = 20;
			$scaley = 10;
			$under = countUnder($printLeafNode,0);

			$new = $printLeafNode->newickText;

			$leafsInNode = $printLeafNode->leafs;
			$nodesInNode = $printLeafNode->childrens;
			$countLeaf = 0;
			$countNode = 0;

			for ($i=0; $i < count($leafsInNode); $i++) {
				if($leafsInNode[$i]->accession!=""){$count = $count+1;$countLeaf = $countLeaf+1;}
			}
			for ($i=0; $i < count($nodesInNode); $i++) {
				if($nodesInNode[$i]->newickText!=""){$count = $count+1;$countNode = $countNode+1;}
			}

			$count = $countLeaf+$countNode;
			
			$distance =0;
			
			//This makes the initial vertical line that will make the base where the leafs and nodes wil branch from
			$startingx = $x;
			$topy = 0;
			$verticalTop = 0;
			$verticalBottom = 0;
			for ($i=0; $i < $countNode; $i++) { 
					
					$topy = $y;
					$split = explode(':', $nodesInNode[$i]->newickText);
					$distance = $nodesInNode[$i]->distance;
					
					if($split[0]!=""){
						
						if($distance == 0){
							$distance = 1.5;
							$y = printLeafs($nodesInNode[$i], ($startingx+$distance*$scale), $y);
							
							if($countLeaf==0){
								
								echo "<line stroke-dasharray=\"2\" x1=".$startingx." y1=".(($y-$topy-$scale)/2+$topy)." x2=".($startingx+$distance*$scale)." y2=".(($y-$topy-$scale)/2+$topy)." style=\"stroke:rgb(0,0,0);stroke-width:1\" />";
								
								if($i==0){$verticalTop = ($y-$topy-$scale)/2+$topy;} $verticalBottom = ($y-$topy-$scale)/2+$topy;
							
							}else if($countLeaf>=1){
								
								if($i==0){$verticalTop = ($y-$topy-$scale*$countLeaf-20)/2+$topy;} $verticalBottom = ($y-$topy-$scale*$countLeaf-20)/2+$topy;
								
								echo "<line stroke-dasharray=\"2\" x1=".$startingx." y1=".(($y-$topy-$scale*$countLeaf-20)/2+$topy)." x2=".($startingx+$distance*$scale)." y2=".(($y-$topy-$scale*$countLeaf-10)/2+$topy)." style=\"stroke:rgb(0,0,0);stroke-width:1\" />";
							
							}

						}else{
					
							$y = printLeafs($nodesInNode[$i], ($startingx+$distance*$scale), $y);
							
							if($countLeaf==0){
							
							echo "<line x1=".$startingx." y1=".(($y-$topy-$scale)/2+$topy)." x2=".($startingx+$distance*$scale)." y2=".(($y-$topy-$scale)/2+$topy)." style=\"stroke:rgb(0,0,0);stroke-width:1\" />";
							
							if($i==0){$verticalTop = ($y-$topy-$scale)/2+$topy;} $verticalBottom = ($y-$topy-$scale)/2+$topy;
						
								}else if($countLeaf>=1){
						
							echo "<line x1=".$startingx." y1=".(($y-$topy-$scale*$countLeaf-10)/2+$topy)." x2=".($startingx+$distance*$scale)." y2=".(($y-$topy-$scale*$countLeaf-10)/2+$topy)." style=\"stroke:rgb(0,0,0);stroke-width:1\" />";
						
							if($i==0){$verticalTop = ($y-$topy-$scale*$countLeaf-10)/2+$topy;} $verticalBottom = ($y-$topy-$scale*$countLeaf-10)/2+$topy;

							}
						}
						
					}
			}
			
			//These are the for loops that will draw the leaves
			$leafsVerticalStart = ($y-5);
			for ($i=0; $i < $countLeaf; $i++) {
				$split = explode(':', $leafsInNode[$i]->accession);
				$distance = $leafsInNode[$i]->distance;
				if($split[0]!=""){
  					echo "<line x1=".($x+$distance*$scale)." y1=".($y-5)." x2=".($x)." y2=".($y-5)." style=\"stroke:rgb(0,0,0);stroke-width:1\" />";
					echo "<text id=".$split[0]." onclick=\"makeAlert('".$split[0]."')\" x=".($x+$distance*$scale+10)." y=".$y.">".$split[0]."</text>";
				}
				$verticalBottom = ($y-5);
				$y = $y+20;
			}

			//Condition that will draw the vertical line to join the leaves
			if($countLeaf>=1 && $countNode==0){
  				echo "<line x1=".($x)." y1=".($y-45)." x2=".($x)." y2=".($y-5-20)." style=\"stroke:rgb(0,0,0);stroke-width:1\" />";
  			}
  			//Conditions that will make the vertical line to join the nodes together
  			if($countNode>=1){
				echo "<line x1=".($x)." y1=".($verticalTop)." x2=".($x)." y2=".$verticalBottom." style=\"stroke:rgb(0,0,0);stroke-width:1\" />";
  			}
		return $y;
		}
	?>
</svg>

</body>
</html>