
## Sample app for siege testing

Can be installed using the docker compose command. Env file is also included into the repo. 

1. Run http://localhost/transaction/sample controller to generate URLs for siege testing.
2. siege_urls.txt is located in the public directory. (Records are appended to the .txt file)
3. http://localhost/transaction/create endpoint with params is used to add records to the database. 
4. Use http://localhost/transactions to view added records

Siege command: 
**siege -d1 -r2 -c20 --file=./public/siege_urls.txt**

#### Result

Transactions:		          60 hits\
Availability:		       75.00 %\
Elapsed time:		        6.26 secs\
Data transferred:	       18.73 MB\
Response time:		        1.05 secs\
Transaction rate:	        9.58 trans/sec\
Throughput:		        2.99 MB/sec\
Concurrency:		       10.02\
Successful transactions:          60\
Failed transactions:	          20\
Longest transaction:	        2.36\
Shortest transaction:	        0.02

#### Output

** SIEGE 4.1.5
** Preparing 20 concurrent users for battle.
The server is now under siege...\
<span style="color:#71BCEE">HTTP/1.1 302     0.11 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA12502624757136034325872820&merchant_reference=PY533558&amount=159.46&payment_method=JCB&status=1&risk_score=9\
HTTP/1.1 302     0.15 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA78233233601421831793967567&merchant_reference=FI526428&amount=302.29&payment_method=Visa&status=0&risk_score=8\
HTTP/1.1 302     0.20 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA51713003644771255176708766&merchant_reference=ZP921439&amount=131.53&payment_method=Visa&status=0&risk_score=39\
HTTP/1.1 302     0.27 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA96239369830310624053398588&merchant_reference=GN605018&amount=172.54&payment_method=Visa&status=2&risk_score=26\
HTTP/1.1 302     0.31 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA83429930890338754113656535&merchant_reference=IO026001&amount=289.78&payment_method=JCB&status=2&risk_score=39\
HTTP/1.1 302     0.36 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA81068176387402922725697771&merchant_reference=LK536576&amount=221.84&payment_method=JCB&status=1&risk_score=4\
HTTP/1.1 302     0.40 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA95910534801198791610522613&merchant_reference=OZ084177&amount=246.67&payment_method=MasterCard&status=1&risk_score=33\
HTTP/1.1 302     0.44 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA67485265967262559664367874&merchant_reference=GG401612&amount=263.31&payment_method=Visa+Retired&status=1&risk_score=45\
HTTP/1.1 302     0.49 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA02019907573285446215476954&merchant_reference=LO976557&amount=119.35&payment_method=Visa&status=0&risk_score=37\
HTTP/1.1 302     0.53 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA45599950666207493164030017&merchant_reference=QL277599&amount=74.66&payment_method=MasterCard&status=0&risk_score=12\
HTTP/1.1 302     0.57 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA39774356656145953139246369&merchant_reference=UU777597&amount=233.08&payment_method=Visa&status=1&risk_score=11\
HTTP/1.1 302     0.62 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA91212269831298853053034385&merchant_reference=BD760923&amount=167.12&payment_method=Visa&status=0&risk_score=32\
HTTP/1.1 302     0.66 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA11070548556288412609223153&merchant_reference=EJ902374&amount=270.46&payment_method=MasterCard&status=2&risk_score=24\
HTTP/1.1 302     0.71 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA81995263769661492361738618&merchant_reference=LZ210880&amount=242.35&payment_method=Visa+Retired&status=0&risk_score=38\
HTTP/1.1 302     0.76 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA61101856557426470993260499&merchant_reference=IC550998&amount=213.97&payment_method=Visa&status=0&risk_score=10\
HTTP/1.1 302     0.80 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA98508055999756794719041631&merchant_reference=NW564320&amount=228.72&payment_method=Discover+Card&status=2&risk_score=5\
HTTP/1.1 302     0.91 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA93246256472195769589548928&merchant_reference=ZD637097&amount=265.01&payment_method=MasterCard&status=0&risk_score=38\
HTTP/1.1 302     0.96 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA31180661023120244269198143&merchant_reference=ZH630212&amount=196.05&payment_method=JCB&status=0&risk_score=41\
HTTP/1.1 302     1.00 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA13467061533051765582423880&merchant_reference=BR700423&amount=271.76&payment_method=American+Express&status=0&risk_score=0\
HTTP/1.1 302     1.05 secs:     362 bytes ==> GET  /transaction/create?psp_reference=UA57567050091638328938523878&merchant_reference=QT916401&amount=327.34&payment_method=Visa&status=1&risk_score=42\
</span>
<span style="color:#429EDA">HTTP/1.1 200     0.98 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.98 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.06 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.03 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.97 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.94 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.03 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.95 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.94 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap
HTTP/1.1 200     0.94 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.95 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap
HTTP/1.1 200     0.94 secs:   12676 bytes ==> GET  /transactions
HTTP/1.1 200     0.03 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.94 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.03 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.94 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.94 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.94 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.03 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.93 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     685 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.93 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     685 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap
HTTP/1.1 200     0.94 secs:   12676 bytes ==> GET  /transactions
HTTP/1.1 200     0.02 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.87 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.03 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.86 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.03 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.86 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.03 secs:     685 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\
HTTP/1.1 200     0.86 secs:   12676 bytes ==> GET  /transactions\
HTTP/1.1 200     0.02 secs:     690 bytes ==> GET  /css2?family=Nunito:wght@400;600;700&display=swap\</span>
<span style="color:#EE5A3A">HTTP/1.1 500     0.93 secs:  968476 bytes ==> GET  /transaction/create?psp_reference=UA98508055999756794719041631&merchant_reference=NW564320&amount=228.72&payment_method=Discover+Card&status=2&risk_score=5\
HTTP/1.1 500     1.02 secs:  968372 bytes ==> GET  /transaction/create?psp_reference=UA12502624757136034325872820&merchant_reference=PY533558&amount=159.46&payment_method=JCB&status=1&risk_score=9\
HTTP/1.1 500     1.06 secs:  968372 bytes ==> GET  /transaction/create?psp_reference=UA81068176387402922725697771&merchant_reference=LK536576&amount=221.84&payment_method=JCB&status=1&risk_score=4\
HTTP/1.1 500     1.17 secs:  968452 bytes ==> GET  /transaction/create?psp_reference=UA11070548556288412609223153&merchant_reference=EJ902374&amount=270.46&payment_method=MasterCard&status=2&risk_score=24\
HTTP/1.1 500     1.25 secs:  968476 bytes ==> GET  /transaction/create?psp_reference=UA67485265967262559664367874&merchant_reference=GG401612&amount=263.31&payment_method=Visa+Retired&status=1&risk_score=45\
HTTP/1.1 500     1.29 secs:  968452 bytes ==> GET  /transaction/create?psp_reference=UA93246256472195769589548928&merchant_reference=ZD637097&amount=265.01&payment_method=MasterCard&status=0&risk_score=38\
HTTP/1.1 500     1.38 secs:  968382 bytes ==> GET  /transaction/create?psp_reference=UA78233233601421831793967567&merchant_reference=FI526428&amount=302.29&payment_method=Visa&status=0&risk_score=8\
HTTP/1.1 500     1.43 secs:  968392 bytes ==> GET  /transaction/create?psp_reference=UA91212269831298853053034385&merchant_reference=BD760923&amount=167.12&payment_method=Visa&status=0&risk_score=32\
HTTP/1.1 500     1.51 secs:  968476 bytes ==> GET  /transaction/create?psp_reference=UA81995263769661492361738618&merchant_reference=LZ210880&amount=242.35&payment_method=Visa+Retired&status=0&risk_score=38\
HTTP/1.1 500     1.48 secs:  968392 bytes ==> GET  /transaction/create?psp_reference=UA96239369830310624053398588&merchant_reference=GN605018&amount=172.54&payment_method=Visa&status=2&risk_score=26\
HTTP/1.1 500     1.61 secs:  968392 bytes ==> GET  /transaction/create?psp_reference=UA39774356656145953139246369&merchant_reference=UU777597&amount=233.08&payment_method=Visa&status=1&risk_score=11\
HTTP/1.1 500     1.68 secs:  968382 bytes ==> GET  /transaction/create?psp_reference=UA31180661023120244269198143&merchant_reference=ZH630212&amount=196.05&payment_method=JCB&status=0&risk_score=41\
HTTP/1.1 500     1.80 secs:  968442 bytes ==> GET  /transaction/create?psp_reference=UA45599950666207493164030017&merchant_reference=QL277599&amount=74.66&payment_method=MasterCard&status=0&risk_score=12\
HTTP/1.1 500     1.82 secs:  968392 bytes ==> GET  /transaction/create?psp_reference=UA57567050091638328938523878&merchant_reference=QT916401&amount=327.34&payment_method=Visa&status=1&risk_score=42\
HTTP/1.1 500     1.91 secs:  968382 bytes ==> GET  /transaction/create?psp_reference=UA83429930890338754113656535&merchant_reference=IO026001&amount=289.78&payment_method=JCB&status=2&risk_score=39\
HTTP/1.1 500     2.03 secs:  968392 bytes ==> GET  /transaction/create?psp_reference=UA61101856557426470993260499&merchant_reference=IC550998&amount=213.97&payment_method=Visa&status=0&risk_score=10
HTTP/1.1 500     2.11 secs:  968506 bytes ==> GET  /transaction/create?psp_reference=UA13467061533051765582423880&merchant_reference=BR700423&amount=271.76&payment_method=American+Express&status=0&risk_score=0\
HTTP/1.1 500     2.18 secs:  968392 bytes ==> GET  /transaction/create?psp_reference=UA02019907573285446215476954&merchant_reference=LO976557&amount=119.35&payment_method=Visa&status=0&risk_score=37\
HTTP/1.1 500     2.29 secs:  968392 bytes ==> GET  /transaction/create?psp_reference=UA51713003644771255176708766&merchant_reference=ZP921439&amount=131.53&payment_method=Visa&status=0&risk_score=39\
HTTP/1.1 500     2.36 secs:  968452 bytes ==> GET  /transaction/create?psp_reference=UA95910534801198791610522613&merchant_reference=OZ084177&amount=246.67&payment_method=MasterCard&status=1&risk_score=33\</span>
