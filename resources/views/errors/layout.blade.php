@php
  $logo = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTAiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCA5MCAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE5Ljg2NDcgMTEuODM2M0gxOC43ODQ5VjEwLjQ2MTlIMTYuMDE0NEMxNS4zNTk5IDEwLjQ2MTkgMTUgMTAuMTEyOSAxNSA5LjY1NDc4QzE1IDkuNDE0ODEgMTUuMDg3MyA5LjE0MjEyIDE1LjI4MzYgOC44ODAzNEwxOC4wMzIzIDUuMDE5MDdDMTguMjk0MSA0LjY1OTEyIDE4LjU1NTggNC4zOTczNCAxOS4wNjg1IDQuMzk3MzRDMTkuNTI2NiA0LjM5NzM0IDE5Ljg2NDcgNC43MTM2NiAxOS44NjQ3IDUuMjE1NFY5LjUxMjk4SDIxLjA0MjhWMTAuNDYxOUgxOS44NjQ3VjExLjgzNjNaTTE2LjE2NzEgOS41MTI5OEgxOC43ODQ5VjUuODM3MTRDMTguNzg0OSA1Ljc3MTY5IDE4Ljc2MzEgNS43MTcxNSAxOC42ODY3IDUuNzE3MTVDMTguNjEwNCA1LjcxNzE1IDE4LjU3NzcgNS43ODI2IDE4LjUwMTMgNS44ODA3N0wxNi4wNzk4IDkuMzM4NDZDMTYuMDQ3MSA5LjM4MjA5IDE2LjAzNjIgOS40MTQ4MSAxNi4wMzYyIDkuNDQ3NTNDMTYuMDM2MiA5LjUxMjk4IDE2LjEwMTcgOS41MTI5OCAxNi4xNjcxIDkuNTEyOThaIiBmaWxsPSIjMEYwRjBGIi8+CjxwYXRoIGQ9Ik0yMy4wNTgyIDE0LjI5MDVIMjEuOTc4M1Y5LjE1MzAzQzIxLjk3ODMgNy41NjA1MyAyMy4yMTA5IDYuMzYwNyAyNC44MjUyIDYuMzYwN0MyNi40Mzk1IDYuMzYwNyAyNy42NjExIDcuNjI1OTcgMjcuNjYxMSA5LjE1MzAzQzI3LjY2MTEgMTAuNzY3MyAyNi40OTQgMTEuOTY3MiAyNC44Njg4IDExLjk2NzJDMjQuMTQ4OSAxMS45NjcyIDIzLjQ5NDUgMTEuNjUwOSAyMy4wNTgyIDExLjE3MDlWMTQuMjkwNVpNMjQuODI1MiAxMC45NTI4QzI1LjgxNzggMTAuOTUyOCAyNi41ODEzIDEwLjEzNDcgMjYuNTgxMyA5LjE2Mzk0QzI2LjU4MTMgOC4xODIyNiAyNS44MTc4IDcuMzg2MDEgMjQuODI1MiA3LjM4NjAxQzIzLjgyMTcgNy4zODYwMSAyMy4wNTgyIDguMTgyMjYgMjMuMDU4MiA5LjE2Mzk0QzIzLjA1ODIgMTAuMTM0NyAyMy44MjE3IDEwLjk1MjggMjQuODI1MiAxMC45NTI4WiIgZmlsbD0iIzBGMEYwRiIvPgo8cGF0aCBkPSJNMjkuOTYwNiAxMS44MzYzSDI4Ljg4MDdWOC42NTEyOEMyOC44ODA3IDcuMzUzMjggMjkuNjIyNCA2LjM4MjUxIDMxLjAxODYgNi4zODI1MUMzMS4zNTY3IDYuMzgyNTEgMzEuNzA1OCA2LjQ0Nzk2IDMxLjk3ODUgNi41Nzg4NVY3LjY0Nzc5QzMxLjcxNjcgNy40OTUwOCAzMS40MTEzIDcuNDE4NzMgMzEuMTE2OCA3LjQxODczQzMwLjM5NjkgNy40MTg3MyAyOS45NjA2IDcuOTA5NTcgMjkuOTYwNiA4LjY5NDkxVjExLjgzNjNaIiBmaWxsPSIjMEYwRjBGIi8+CjxwYXRoIGQ9Ik0zNS4yODgzIDExLjk2NzJDMzMuNjc0IDExLjk2NzIgMzIuNDMwNSAxMC43MDE5IDMyLjQzMDUgOS4xNTMwM0MzMi40MzA1IDcuNjE1MDYgMzMuNjg0OSA2LjM2MDcgMzUuMjg4MyA2LjM2MDdDMzYuOTAyNiA2LjM2MDcgMzguMTI0MyA3LjYyNTk3IDM4LjEyNDMgOS4xNTMwM0MzOC4xMjQzIDEwLjcwMTkgMzYuODkxNyAxMS45NjcyIDM1LjI4ODMgMTEuOTY3MlpNMzUuMjg4MyAxMC45NDE5QzM2LjI4MDkgMTAuOTQxOSAzNy4wNDQ0IDEwLjEzNDcgMzcuMDQ0NCA5LjE2Mzk0QzM3LjA0NDQgOC4xODIyNiAzNi4yODA5IDcuMzc1MSAzNS4yODgzIDcuMzc1MUMzNC4yODQ4IDcuMzc1MSAzMy41MTA0IDguMTgyMjYgMzMuNTEwNCA5LjE2Mzk0QzMzLjUxMDQgMTAuMTM0NyAzNC4yODQ4IDEwLjk0MTkgMzUuMjg4MyAxMC45NDE5WiIgZmlsbD0iIzBGMEYwRiIvPgo8cGF0aCBkPSJNNDEuNzQwOCAxNC40MjE0QzQwLjU4NDYgMTQuNDIxNCAzOS42MjQ3IDEzLjkxOTYgMzkuMTMzOSAxMi45NzA3TDQwLjAzOTIgMTIuNDc5OEM0MC4zNTU1IDEzLjA1NzkgNDAuOTQ0NSAxMy40Mjg4IDQxLjcxOSAxMy40Mjg4QzQyLjg0MjQgMTMuNDI4OCA0My42MDU5IDEyLjYyMTYgNDMuNjA1OSAxMS4zNjczVjEwLjk0MTlDNDMuMjU2OSAxMS40OTgyIDQyLjYwMjUgMTEuOTEyNiA0MS43MDggMTEuOTEyNkM0MC4xOTE5IDExLjkxMjYgMzguOTkyMSAxMC43MTI4IDM4Ljk5MjEgOS4xNDIxMkMzOC45OTIxIDcuNjE1MDYgNDAuMjEzNyA2LjM2MDcgNDEuODM4OSA2LjM2MDdDNDMuNDUzMiA2LjM2MDcgNDQuNjg1OCA3LjU2MDUzIDQ0LjY4NTggOS4xNTMwM1YxMS4zNTY0QzQ0LjY4NTggMTMuMjEwNiA0My40NDIzIDE0LjQyMTQgNDEuNzQwOCAxNC40MjE0Wk00MS44MjggMTAuODk4MkM0Mi44MDk3IDEwLjg5ODIgNDMuNTk1IDEwLjExMjkgNDMuNTk1IDkuMTMxMjFDNDMuNTk1IDguMTQ5NTMgNDIuODA5NyA3LjM4NjAxIDQxLjgyOCA3LjM4NjAxQzQwLjg1NzMgNy4zODYwMSA0MC4wNjEgOC4xNDk1MyA0MC4wNjEgOS4xMzEyMUM0MC4wNjEgMTAuMTEyOSA0MC44NTczIDEwLjg5ODIgNDEuODI4IDEwLjg5ODJaIiBmaWxsPSIjMEYwRjBGIi8+CjxwYXRoIGQ9Ik00Ny4zMTI1IDExLjgzNjNINDYuMjMyNlY4LjY1MTI4QzQ2LjIzMjYgNy4zNTMyOCA0Ni45NzQzIDYuMzgyNTEgNDguMzcwNSA2LjM4MjUxQzQ4LjcwODYgNi4zODI1MSA0OS4wNTc3IDYuNDQ3OTYgNDkuMzMwMyA2LjU3ODg1VjcuNjQ3NzlDNDkuMDY4NiA3LjQ5NTA4IDQ4Ljc2MzIgNy40MTg3MyA0OC40Njg3IDcuNDE4NzNDNDcuNzQ4OCA3LjQxODczIDQ3LjMxMjUgNy45MDk1NyA0Ny4zMTI1IDguNjk0OTFWMTEuODM2M1oiIGZpbGw9IiMwRjBGMEYiLz4KPHBhdGggZD0iTTUyLjQ2NTcgMTEuOTY3MkM1MC45MTY4IDExLjk2NzIgNDkuNzgyNCAxMC43MDE5IDQ5Ljc4MjQgOS4xNTMwM0M0OS43ODI0IDcuNjI1OTcgNTEuMDA0IDYuMzYwNyA1Mi42MjkzIDYuMzYwN0M1NC4yNDM2IDYuMzYwNyA1NS40NzYxIDcuNTYwNTMgNTUuNDc2MSA5LjE1MzAzVjExLjgzNjNINTQuNDUwOFYxMC44OTgyQzU0LjA0NzIgMTEuNTUyNyA1My4zMzgzIDExLjk2NzIgNTIuNDY1NyAxMS45NjcyWk01Mi42MjkzIDEwLjk0MTlDNTMuNjMyOCAxMC45NDE5IDU0LjM5NjMgMTAuMTM0NyA1NC4zOTYzIDkuMTYzOTRDNTQuMzk2MyA4LjE4MjI2IDUzLjYzMjggNy4zNzUxIDUyLjYyOTMgNy4zNzUxQzUxLjYzNjcgNy4zNzUxIDUwLjg2MjMgOC4xODIyNiA1MC44NjIzIDkuMTYzOTRDNTAuODYyMyAxMC4xMzQ3IDUxLjYzNjcgMTAuOTQxOSA1Mi42MjkzIDEwLjk0MTlaIiBmaWxsPSIjMEYwRjBGIi8+CjxwYXRoIGQ9Ik03OC4yNDY5IDExLjk1NjNDNzYuNjIxNyAxMS45NTYzIDc1LjQxMSAxMC43NzgzIDc1LjQxMSA5LjEzMTIxQzc1LjQxMSA3LjU5MzI1IDc2LjUxMjYgNi4zMzg4OCA3OC4xMTYgNi4zMzg4OEM3OS43MzAzIDYuMzM4ODggODAuNzMzOCA3LjUwNTk5IDgwLjczMzggOS4wMDAzMlY5LjQzNjYySDc2LjQ1ODFDNzYuNTc4MSAxMC4zNTI5IDc3LjI3NjEgMTAuOTk2NCA3OC4yMzYgMTAuOTk2NEM3OC44OTA0IDEwLjk5NjQgNzkuNDc5NSAxMC43MTI4IDc5Ljc5NTggMTAuMTIzOEw4MC42MjQ3IDEwLjU0OTJDODAuMTU1NyAxMS40NjU0IDc5LjI5NCAxMS45NTYzIDc4LjI0NjkgMTEuOTU2M1pNNzYuNTAxNyA4LjczODU0SDc5LjY1NEM3OS42MTAzIDcuODg3NzUgNzguOTg4NiA3LjMwOTY1IDc4LjEwNTEgNy4zMDk2NUM3Ny4xOTk4IDcuMzA5NjUgNzYuNjEwOCA3Ljk0MjI5IDc2LjUwMTcgOC43Mzg1NFoiIGZpbGw9IiMwRjBGMEYiLz4KPHBhdGggZD0iTTgzLjEwMjkgMTEuODM2M0g4Mi4wMjNWOC42NTEyOEM4Mi4wMjMgNy4zNTMyOCA4Mi43NjQ3IDYuMzgyNTEgODQuMTYwOSA2LjM4MjUxQzg0LjQ5OSA2LjM4MjUxIDg0Ljg0ODEgNi40NDc5NiA4NS4xMjA4IDYuNTc4ODVWNy42NDc3OUM4NC44NTkgNy40OTUwOCA4NC41NTM2IDcuNDE4NzMgODQuMjU5MSA3LjQxODczQzgzLjUzOTIgNy40MTg3MyA4My4xMDI5IDcuOTA5NTcgODMuMTAyOSA4LjY5NDkxVjExLjgzNjNaIiBmaWxsPSIjMEYwRjBGIi8+CjxwYXRoIGQ9Ik04Ny44ODM5IDExLjk1NjNDODYuODkxNCAxMS45NTYzIDg2LjEyNzggMTEuNTYzNiA4NS43MTMzIDEwLjc2NzNMODYuNTQyMyAxMC4zMDkyQzg2LjgxNSAxMC44NDM3IDg3LjI1MTMgMTEuMDQgODcuODQwMyAxMS4wNEM4OC40NTExIDExLjA0IDg4LjkyMDIgMTAuNzg5MiA4OC45MjAyIDEwLjMyMDFDODguOTIwMiA5LjE5NjY2IDg1Ljg1NTEgMTAuMDQ3NCA4NS44NTUxIDguMDA3NzRDODUuODU1MSA3LjA2OTY5IDg2LjY4NDEgNi4zODI1MSA4Ny44NTEyIDYuMzgyNTFDODguODQzOCA2LjM4MjUxIDg5LjUyMDEgNi44NDA2MyA4OS44NTgyIDcuNDYyMzZMODkuMDI5MiA3LjkzMTM4Qzg4LjgwMDIgNy40NjIzNiA4OC4zNjM5IDcuMjk4NzUgODcuODczIDcuMjk4NzVDODcuMzcxMyA3LjI5ODc1IDg2LjkzNSA3LjU2MDUzIDg2LjkzNSA3Ljk4NTkyQzg2LjkzNSA5LjA3NjY3IDkwIDguMjgwNDMgOTAgMTAuMjk4M0M5MCAxMS4zMTI3IDg5LjAxODMgMTEuOTU2MyA4Ny44ODM5IDExLjk1NjNaIiBmaWxsPSIjMEYwRjBGIi8+CjxwYXRoIGQ9Ik02NS4wODY2IDExLjgzNjNINjYuMTQxNkg2Ni4xNjY0VjkuMTk2NjZDNjYuMTY2NCA4LjIyNTg5IDY2LjYxMzYgNy4zNzUxIDY3LjYxNzEgNy4zNzUxQzY4LjYwOTcgNy4zNzUxIDY5LjEwMDUgOC4xOTMxNiA2OS4xMDA1IDkuMTc0ODRWMTEuODM2M0g3MC4xODA0VjkuMTc0ODRDNzAuMTgwNCA4LjE5MzE2IDcwLjY3MTIgNy4zNzUxIDcxLjY0MiA3LjM3NTFDNzIuNjQ1NSA3LjM3NTEgNzMuMTI1NCA4LjIyNTg5IDczLjEyNTQgOS4xOTY2NlYxMS44MzYzSDc0LjIwNTJWOS4wMjIxNEM3NC4yMDUyIDcuNTM4NzEgNzMuMzMyNiA2LjMzODg4IDcxLjcxODMgNi4zMzg4OEM3MC43MDM5IDYuMzM4ODggNjkuOTUxMyA2Ljg4NDI2IDY5LjY1NjggNy43MTMyM0M2OS4zODQxIDYuODg0MjYgNjguNjA5NyA2LjMzODg4IDY3LjU0MDggNi4zMzg4OEM2Ni42Njk2IDYuMzM4ODggNjUuODgwNiA2LjgyMTYzIDY1LjYwOTUgNy43MTMyM0M2NS4zMDQgNi44MTE1MiA2NC41MzI3IDYuMzM4ODggNjMuNjU0NyA2LjMzODg4QzYyLjY0MDMgNi4zMzg4OCA2MS44ODc3IDYuODg0MjYgNjEuNTkzMiA3LjcxMzIzQzYxLjMyMDUgNi44ODQyNiA2MC41NDYxIDYuMzM4ODggNTkuNDc3MSA2LjMzODg4QzU3Ljg3MzcgNi4zMzg4OCA1Ny4wMjI5IDcuNTM4NzEgNTcuMDIyOSA5LjAzMzA0VjExLjgzNjNINTguMTAyOFY5LjE5NjY2QzU4LjEwMjggOC4yMjU4OSA1OC41NSA3LjM3NTEgNTkuNTUzNSA3LjM3NTFDNjAuNTQ2MSA3LjM3NTEgNjEuMDM2OSA4LjE5MzE2IDYxLjAzNjkgOS4xNzQ4NFYxMS44MzYzSDYyLjExNjdWOS4xNzQ4NEM2Mi4xMTY3IDguMTkzMTYgNjIuNjA3NiA3LjM3NTEgNjMuNTc4NCA3LjM3NTFDNjQuNTgxOCA3LjM3NTEgNjUuMDYxOCA4LjIyNTg5IDY1LjA2MTggOS4xOTY2NlYxMS44MzYzSDY1LjA4NjZaIiBmaWxsPSIjMEYwRjBGIi8+CjxwYXRoIGQ9Ik05Ljg0Mzc1IDguMTE5NTdIOC45MDYyNUM4LjEyOTYgOC4xMTk1NyA3LjUgNy40ODk5NyA3LjUgNi43MTMzMlY1Ljc3NTgyQzcuNSA0Ljk5OTE3IDguMTI5NiA0LjM2OTU3IDguOTA2MjUgNC4zNjk1N0g5Ljg0Mzc1QzEwLjYyMDQgNC4zNjk1NyAxMS4yNSAzLjczOTk3IDExLjI1IDIuOTYzMzJWMi4wMjU4MkMxMS4yNSAxLjI0OTE3IDEwLjYyMDQgMC42MTk1NjggOS44NDM3NSAwLjYxOTU2OEg4LjkwNjI1QzguMTI5NiAwLjYxOTU2OCA3LjUgMS4yNDkxNyA3LjUgMi4wMjU4MlYyLjk2MzMyQzcuNSAzLjczOTk3IDYuODcwNCA0LjM2OTU3IDYuMDkzNzUgNC4zNjk1N0g1LjE1NjI1QzQuMzc5NiA0LjM2OTU3IDMuNzUgNC45OTkxNyAzLjc1IDUuNzc1ODJWNi43MTMzMkMzLjc1IDcuNDg5OTcgMy4xMjA0IDguMTE5NTcgMi4zNDM3NSA4LjExOTU3SDEuNDA2MjVDMC42Mjk2IDguMTE5NTcgMCA4Ljc0OTE3IDAgOS41MjU4MlYxMC40NjMzQzAgMTEuMjQgMC42Mjk2IDExLjg2OTYgMS40MDYyNSAxMS44Njk2SDYuMDkzNzVDNi44NzA0IDExLjg2OTYgNy41IDEyLjQ5OTIgNy41IDEzLjI3NThWMTQuMjEzM0M3LjUgMTQuOTkgOC4xMjk2IDE1LjYxOTYgOC45MDYyNSAxNS42MTk2SDkuODQzNzVDMTAuNjIwNCAxNS42MTk2IDExLjI1IDE0Ljk5IDExLjI1IDE0LjIxMzNWOS41MjU4MkMxMS4yNSA4Ljc0OTE3IDEwLjYyMDQgOC4xMTk1NyA5Ljg0Mzc1IDguMTE5NTdaIiBmaWxsPSIjMDBBNTM4Ii8+Cjwvc3ZnPgo=';
  $stroke = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIzNCIgaGVpZ2h0PSI5MDAiIHZpZXdCb3g9IjAgMCAxMjM0IDkwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIgogICAgICAgICAgZD0iTTI0MTcuMzEgMjMyLjk3MkMyMzYzLjMgMjAxLjc4OCAyMjc1Ljc0IDIwMS43OCAyMjIxLjc1IDIzMi45NTJMMjE1NS43NiAyNzEuMDUxQzIxMDAuNDIgMzAzLjAwMiAyMDEwLjY4IDMwMi45OTQgMTk1NS4zMiAyNzEuMDMxTDE4ODkuMyAyMzIuOTE5QzE4MzUuMjkgMjAxLjczNiAxNzQ3Ljc0IDIwMS43MjcgMTY5My43NSAyMzIuOUwxNjI3Ljc2IDI3MC45OTlDMTU3Mi40MiAzMDIuOTUgMTQ4Mi42NyAzMDIuOTQxIDE0MjcuMzEgMjcwLjk3OUwxMzYxLjMgMjMyLjg2N0MxMzExLjg5IDIwNC4zNDEgMTIzNC40MiAyMDEuOTAzIDExODAuMjQgMjI1LjU1NkMxMTc2LjMgMjI4LjU3IDExNzEuOTUgMjMxLjQ2MyAxMTY3LjIgMjM0LjIwOEwxMTAxLjIxIDI3Mi4zMDdDMTA5Ni42MSAyNzQuOTYyIDEwOTEuNzggMjc3LjM5NiAxMDg2Ljc0IDI3OS42MDlDMTA0Ni4xOCAzMTAuODc1IDEwNTAuNTQgMzU1LjQxNSAxMDk5Ljc5IDM4My44NTJMMTE2NS44IDQyMS45NjRDMTIxOS44MSA0NTMuMTQ3IDEzMDcuMzcgNDUzLjE1NiAxMzYxLjM2IDQyMS45ODNMMTQyNy4zNSAzODMuODg0QzE0ODIuNjkgMzUxLjkzMyAxNTcyLjQzIDM1MS45NDIgMTYyNy43OSAzODMuOTA0TDE2OTMuOCA0MjIuMDE2QzE3NDcuODEgNDUzLjIgMTgzNS4zNyA0NTMuMjA4IDE4ODkuMzYgNDIyLjAzNkwxOTU1LjM1IDM4My45MzdDMjAxMC42OSAzNTEuOTg1IDIxMDAuNDMgMzUxLjk5NCAyMTU1Ljc5IDM4My45NTdMMjIyMS44MSA0MjIuMDY5QzIyNzUuODIgNDUzLjI1MiAyMzYzLjM3IDQ1My4yNjEgMjQxNy4zNiA0MjIuMDg4TDI0ODMuMzUgMzgzLjk4OUMyNTM3LjM1IDM1Mi44MTcgMjUzNy4zMyAzMDIuMjY3IDI0ODMuMzIgMjcxLjA4NEwyNDE3LjMxIDIzMi45NzJaTTExNzcuNzcgMjI0LjEzNUMxMTcyLjczIDIyNi4zNDggMTE2Ny45IDIyOC43ODIgMTE2My4zIDIzMS40MzdMMTA5Ny4zMSAyNjkuNTM2QzEwOTIuNTYgMjcyLjI4MSAxMDg4LjIxIDI3NS4xNzQgMTA4NC4yNyAyNzguMTg4QzEwMzIuNDMgMzAwLjgyMyA5NTkuMjQ1IDI5OS41NjQgOTA5Ljc0MiAyNzQuNDE3QzkwNy41NzYgMjcyLjk3OSA5MDUuMzA3IDI3MS41NzUgOTAyLjkzOCAyNzAuMjA3TDgzNi45MjYgMjMyLjA5NUM4MzQuODAyIDIzMC44NjggODMyLjYyNyAyMjkuNjg5IDgzMC40MDYgMjI4LjU1N0M3ODMuMjg3IDE5Ny4xODggNzg1LjUzNiAxNDkuNjY2IDgzNy4xNjMgMTE5Ljg2TDkwMy4xNTIgODEuNzYwOUM5NTcuMTQ0IDUwLjU4ODIgMTA0NC43IDUwLjU5NjkgMTA5OC43MSA4MS43ODAzTDExNjQuNzIgMTE5Ljg5MkMxMjEzLjk3IDE0OC4zMjkgMTIxOC4zMyAxOTIuODY5IDExNzcuNzcgMjI0LjEzNVpNMTE4Ni4wNiAyMjAuNzU0QzEyNDEuMDIgMjAwLjAwOSAxMzE1LjQ2IDIwMy41NzkgMTM2My43NCAyMzEuNDU3TDE0MjkuNzYgMjY5LjU2OUMxNDgzLjc3IDMwMC43NTIgMTU3MS4zMiAzMDAuNzYxIDE2MjUuMzEgMjY5LjU4OEwxNjkxLjMgMjMxLjQ4OUMxNzQ2LjY0IDE5OS41MzggMTgzNi4zOSAxOTkuNTQ3IDE4OTEuNzUgMjMxLjUwOUwxOTU3Ljc2IDI2OS42MjFDMjAxMS43NyAzMDAuODA1IDIwOTkuMzIgMzAwLjgxMyAyMTUzLjMyIDI2OS42NDFMMjIxOS4zMSAyMzEuNTQyQzIyNzQuNjUgMTk5LjU5IDIzNjQuMzkgMTk5LjU5OSAyNDE5Ljc1IDIzMS41NjJMMjQ4NS43NiAyNjkuNjc0QzI1MzUuODUgMjk4LjU5NCAyNTQwLjYzIDM0My43NjUgMjUwMC4wOSAzNzUuNzdDMjU1NS41MyAzNTIuMzY4IDI2MzMuNzYgMzU1LjEyOSAyNjgzLjg1IDM4NC4wNDhMMjc0OS44NyA0MjIuMTZDMjgwNS4yMyA0NTQuMTIyIDI4MDUuMjQgNTA1LjkzNCAyNzQ5LjkgNTM3Ljg4NkwyNjgzLjkxIDU3NS45ODVDMjY1NC4wMiA1OTMuMjQ0IDI2MTQuMDkgNjAxLjE3NyAyNTc0Ljk2IDU5OS43ODdDMjYxNC4zOSA2MDEuODQ0IDI2NTUuMDUgNTk0LjE2MSAyNjg1LjIyIDU3Ni43MzlMMjc1MS4yMSA1MzguNjRDMjgwNi41NiA1MDYuNjg5IDI4OTYuMyA1MDYuNjk4IDI5NTEuNjYgNTM4LjY2TDMwMTcuNjcgNTc2Ljc3MkMzMDczLjAzIDYwOC43MzQgMzA3My4wNCA2NjAuNTQ3IDMwMTcuNyA2OTIuNDk4TDI5NTEuNzEgNzMwLjU5N0MyODk2LjM3IDc2Mi41NDggMjgwNi42MyA3NjIuNTM5IDI3NTEuMjcgNzMwLjU3N0wyNjg1LjI2IDY5Mi40NjVDMjYzMS4yNSA2NjEuMjgxIDI1NDMuNjkgNjYxLjI3MyAyNDg5LjcgNjkyLjQ0NUwyNDIzLjcxIDczMC41NDRDMjM3My4wMSA3NTkuODE1IDIyOTMuNDQgNzYyLjI2MyAyMjM3Ljg4IDczNy44OTNDMjI3MS44NiA3NjUuODU2IDIyNzIuMDIgODAzLjM0MSAyMjM4LjM0IDgzMS4zNzhDMjI4Ny4wOCA4MTIuMjY5IDIzNTEuODcgODEyLjYyOCAyNDAwLjAzIDgzMi40NTNDMjM2Ny4yOCA4MDEuMDAyIDIzNzQuMzggNzU5LjU5IDI0MjEuMzQgNzMyLjQ3OEwyNDg3LjMzIDY5NC4zNzlDMjU0Mi42NyA2NjIuNDI4IDI2MzIuNDEgNjYyLjQzNyAyNjg3Ljc3IDY5NC4zOTlMMjc1My43OCA3MzIuNTExQzI4MDkuMTQgNzY0LjQ3MyAyODA5LjE2IDgxNi4yODYgMjc1My44MiA4NDguMjM3TDI2ODcuODMgODg2LjMzNkMyNjM4LjE3IDkxNS4wMDYgMjU2MC44MSA5MTcuOTQzIDI1MDUuNDUgODk1LjE1MUMyNTM4LjIgOTI2LjYwMiAyNTMxLjEgOTY4LjAxNCAyNDg0LjE0IDk5NS4xMjZMMjQxOC4xNSAxMDMzLjIyQzIzNjguNTYgMTA2MS44NiAyMjkxLjM1IDEwNjQuODIgMjIzNiAxMDQyLjEzQzIyNzMuNTkgMTA3My45OSAyMjY3LjkzIDExMTcuNzYgMjIxOS4wMSAxMTQ2TDIxNTMuMDIgMTE4NC4xQzIwOTcuNjggMTIxNi4wNSAyMDA3Ljk0IDEyMTYuMDQgMTk1Mi41OCAxMTg0LjA4TDE4ODYuNTYgMTE0NS45N0MxODM4LjQ4IDExMTguMjEgMTgzMi4xNSAxMDc1LjQ4IDE4NjcuNTcgMTA0My43OUMxODEyLjU5IDEwNjQuNjEgMTczOC4wNCAxMDYxLjA2IDE2ODkuNyAxMDMzLjE1TDE2MjMuNjkgOTk1LjA0QzE1NzQuOTIgOTY2Ljg4MiAxNTY5LjEgOTIzLjMxNiAxNjA2LjI1IDg5MS40OThDMTU1MS4yMiA5MTIuNTc1IDE0NzYuMyA5MDkuMTA1IDE0MjcuNzggODgxLjA5NEwxMzYxLjc3IDg0Mi45ODJDMTMxMS4xOCA4MTMuNzc2IDEzMDYuODEgNzY3Ljk5NyAxMzQ4LjY1IDczNS45NDFDMTI5OSA3NTcuNDM4IDEyMzAuNDcgNzU3LjY1OCAxMTgwLjQxIDczNi42MDVDMTIyMC44IDc2OC42MTEgMTIxNS45OSA4MTMuNjk5IDExNjUuOTggODQyLjU3MUwxMDk5Ljk5IDg4MC42NjlDMTA0NC42NSA5MTIuNjIxIDk1NC45MTEgOTEyLjYxMiA4OTkuNTUgODgwLjY0OUw4MzMuNTM5IDg0Mi41MzhDNzg0LjQ0MSA4MTQuMTkxIDc3OC44NzQgNzcwLjIzMiA4MTYuODQ3IDczOC4zNkM3NjEuNjQ0IDc2MC4yODUgNjg1LjUwNCA3NTcuMDcxIDYzNi40MDYgNzI4LjcyNEw1NzAuMzk0IDY5MC42MTJDNTE5LjI2MSA2NjEuMDkxIDUxNS4zNDMgNjE0LjYzNSA1NTguNjUgNTgyLjUzNUM1MDMuMDUzIDYwNy41MzggNDIyLjU4OSA2MDUuMjc2IDM3MS40NTcgNTc1Ljc1NEwzMDUuNDQ1IDUzNy42NDNDMjU2LjU1OCA1MDkuNDE3IDI1MC44MjkgNDY1LjcxMyAyODguMjY4IDQzMy44NzZDMjMzLjEyNCA0NTUuNDkxIDE1Ny40MjUgNDUyLjE4NCAxMDguNTM3IDQyMy45NTlMNDIuNTI1MyAzODUuODQ3Qy0xMi44MzUyIDM1My44ODUgLTEyLjg1MDggMzAyLjA3MiA0Mi40OTA3IDI3MC4xMjFMMTA4LjQ4IDIzMi4wMjJDMTYyLjQ3MiAyMDAuODUgMTYyLjQ1NyAxNTAuMyAxMDguNDQ2IDExOS4xMTdMNDIuNDM0MyA4MS4wMDQ3Qy0xMi45MjYyIDQ5LjA0MjMgLTEyLjk0MTUgLTIuNzcwMTkgNDIuMzk5OSAtMzQuNzIxNUwxMDguMzg5IC03Mi44MjAzQzE1Ny4zODQgLTEwMS4xMDggMjMzLjM0MiAtMTA0LjM0NCAyODguNTM0IC04Mi41MzU3QzI1MC41NDYgLTExNC40MTQgMjU2LjA4NyAtMTU4LjM3MSAzMDUuMTY3IC0xODYuNzA3TDM3MS4xNTYgLTIyNC44MDVDNDI2LjQ5NyAtMjU2Ljc1NyA1MTYuMjM5IC0yNTYuNzQ4IDU3MS41OTkgLTIyNC43ODZMNjM3LjYxMSAtMTg2LjY3NEM2OTIuOTcxIC0xNTQuNzExIDY5Mi45ODcgLTEwMi44OTkgNjM3LjY0NiAtNzAuOTQ3NUw1NzEuNjU3IC0zMi44NDg3QzUxNy42NjQgLTEuNjc2MDIgNTE3LjY3OSA0OC44NzM2IDU3MS42OSA4MC4wNTdMNjM3LjcwMiAxMTguMTY5QzY4Ny44MzMgMTQ3LjExMiA2OTIuNTgxIDE5Mi4zMzIgNjUxLjkzOCAyMjQuMzQyQzcwMS4xODcgMjAzLjA3NiA3NjguOTU1IDIwMi43MTYgODE4Ljg1NCAyMjMuMjU3Qzc4MC4wMjcgMTkxLjMyOSA3ODUuMzEzIDE0Ni45NzQgODM0LjcyIDExOC40NDlMOTAwLjcwOSA4MC4zNTA0Qzk1Ni4wNSA0OC4zOTkgMTA0NS43OSA0OC40MDc5IDExMDEuMTUgODAuMzcwM0wxMTY3LjE2IDExOC40ODJDMTIxNS4yOSAxNDYuMjY4IDEyMjEuNTkgMTg5LjA1NSAxMTg2LjA2IDIyMC43NTRaTTgyNy45NDkgMjI5Ljk2NUM3NzMuNjI3IDIwMi4zNjkgNjkwLjc5MSAyMDMuNTQxIDYzOC45MjUgMjMzLjQ4NUw1NzIuOTM2IDI3MS41ODRDNTY0LjI4MyAyNzYuNTggNTU0Ljc4OCAyODAuNzk1IDU0NC43MTUgMjg0LjIyOEM0OTAuMjIyIDMwMy4yMjIgNDE4LjM0OSAyOTkuMTM1IDM3MS4zMDQgMjcxLjk3NEwzMDUuMjkyIDIzMy44NjJDMjQ5LjkzMiAyMDEuOSAyNDkuOTE2IDE1MC4wODcgMzA1LjI1OCAxMTguMTM2TDM3MS4yNDcgODAuMDM3QzQyNS4yMzkgNDguODY0NCA0MjUuMjI0IC0xLjY4NTIgMzcxLjIxMyAtMzIuODY4NkwzMDUuMjAxIC03MC45ODA1QzMwMS45NSAtNzIuODU3MyAyOTguODkxIC03NC44MDI2IDI5Ni4wMjIgLTc2LjgwODJDMjQxLjY5OSAtMTAyLjQ1NiAxNjEuNDkyIC0xMDAuNjU4IDExMC44MzIgLTcxLjQwOThMNDQuODQyOSAtMzMuMzExMUMtOS4xNDk4IC0yLjEzODQxIC05LjEzNDgxIDQ4LjQxMTMgNDQuODc2NSA3OS41OTQ3TDExMC44ODggMTE3LjcwN0MxNjYuMjQ5IDE0OS42NjkgMTY2LjI2NCAyMDEuNDgxIDExMC45MjMgMjMzLjQzM0w0NC45MzM3IDI3MS41MzFDLTkuMDU4OTUgMzAyLjcwNCAtOS4wNDM4MyAzNTMuMjU0IDQ0Ljk2NzQgMzg0LjQzN0wxMTAuOTc5IDQyMi41NDlDMTYxLjM5OCA0NTEuNjU5IDI0MS4wNDggNDUzLjYwMiAyOTUuMzQgNDI4LjM3NEMyOTguNDY0IDQyNi4xNDUgMzAxLjgyMSA0MjMuOTg5IDMwNS40MSA0MjEuOTE2TDM3MS4zOTkgMzgzLjgxOEM0MjYuNzQxIDM1MS44NjYgNTE2LjQ4MyAzNTEuODc1IDU3MS44NDMgMzgzLjgzOEw2MzcuODU1IDQyMS45NDlDNjkxLjg2NiA0NTMuMTMzIDc3OS40MjEgNDUzLjE0MiA4MzMuNDEzIDQyMS45NjlMODk5LjQwMiAzODMuODdDOTAyLjk5MiAzODEuNzk4IDkwNi43MjYgMzc5Ljg2IDkxMC41ODYgMzc4LjA1NkM5NTIuMjMgMzQ4LjE4MyA5NTEuMTI3IDMwNS4wMTIgOTA3LjI4NiAyNzUuODI1QzkwNS4wNjUgMjc0LjY5MyA5MDIuODkgMjczLjUxNCA5MDAuNzY2IDI3Mi4yODdMODM0Ljc1NCAyMzQuMTc1QzgzMi4zODQgMjMyLjgwNyA4MzAuMTE2IDIzMS40MDMgODI3Ljk0OSAyMjkuOTY1Wk05MTguODM4IDI4MS4xMjRDOTY2LjMxNCAzMDAuNjY5IDEwMjkuOTcgMzAxLjI5MiAxMDc4LjQ1IDI4Mi45OUMxMDQ2Ljg1IDMxMS4xODMgMTA0OC4zNCAzNDguMTQ2IDEwODIuOTEgMzc1LjUyNkMxMDM0LjY1IDM1NS4yNCA5NjkuMjMgMzU0LjcyMSA5MjAuMTE0IDM3My45NzRDOTUzLjAwNyAzNDYuMDAyIDk1Mi41OCAzMDguODcxIDkxOC44MzggMjgxLjEyNFpNMjk3Ljc5NyA0MjkuNzkzQzMwMS42NTcgNDI3Ljk4OSAzMDUuMzkxIDQyNi4wNTEgMzA4Ljk4MSA0MjMuOTc5TDM3NC45NyAzODUuODhDNDI4Ljk2MiAzNTQuNzA4IDUxNi41MTcgMzU0LjcxNiA1NzAuNTI4IDM4NS45TDYzNi41NCA0MjQuMDEyQzY5MS45IDQ1NS45NzQgNzgxLjY0MiA0NTUuOTgzIDgzNi45ODMgNDI0LjAzMkw5MDIuOTcyIDM4NS45MzNDOTA2LjU2MiAzODMuODYgOTA5LjkxOSAzODEuNzA0IDkxMy4wNDMgMzc5LjQ3NUM5NjcuMzM1IDM1NC4yNDcgMTA0Ni45OCAzNTYuMTkxIDEwOTcuNCAzODUuM0wxMTYzLjQyIDQyMy40MTJDMTIxNy40MyA0NTQuNTk1IDEyMTcuNDQgNTA1LjE0NSAxMTYzLjQ1IDUzNi4zMThMMTA5Ny40NiA1NzQuNDE2QzEwNDIuMTIgNjA2LjM2OCAxMDQyLjEzIDY1OC4xOCAxMDk3LjQ5IDY5MC4xNDNMMTE2My41MSA3MjguMjU0QzEyMTcuNTIgNzU5LjQzOCAxMjE3LjUzIDgwOS45ODggMTE2My41NCA4NDEuMTZMMTA5Ny41NSA4NzkuMjU5QzEwNDMuNTYgOTEwLjQzMiA5NTYuMDA0IDkxMC40MjMgOTAxLjk5MiA4NzkuMjM5TDgzNS45ODEgODQxLjEyOEM3ODUuMTgxIDgxMS43OTggNzgyLjE0NyA3NjUuMzM4IDgyNi44ODggNzMzLjk4QzgzMC4zMTUgNzMyLjM0MiA4MzMuNjQgNzMwLjU5NyA4MzYuODQ5IDcyOC43NDRMOTAyLjgzOCA2OTAuNjQ1Qzk1OC4xOCA2NTguNjk0IDk1OC4xNjQgNjA2Ljg4MiA5MDIuODA0IDU3NC45MTlMOTAyLjM3NCA1NzQuNjcxQzkwMi4yMTcgNTc0LjU3OSA5MDIuMDU5IDU3NC40ODggOTAxLjkwMiA1NzQuMzk3TDgzNS44OSA1MzYuMjg1Qzc4MC41MjkgNTA0LjMyMyA2OTAuNzg4IDUwNC4zMTQgNjM1LjQ0NiA1MzYuMjY1TDU2OS40NTcgNTc0LjM2NEM1MTUuNDY1IDYwNS41MzcgNDI3LjkxIDYwNS41MjggMzczLjg5OSA1NzQuMzQ0TDMwNy44ODcgNTM2LjIzM0MyNTcuNDY4IDUwNy4xMjMgMjU0LjEwMiA0NjEuMTM4IDI5Ny43OTcgNDI5Ljc5M1pNMTE2NS45IDUzNy43MjdDMTIxNy43MyA1MDcuNzk5IDEzMDAuNTEgNTA2LjYxMiAxMzU0LjgzIDUzNC4xNjFDMTM1Ny4wMSA1MzUuNjA4IDEzNTkuMjkgNTM3LjAyMiAxMzYxLjY4IDUzOC4zOTlMMTQyNy42OSA1NzYuNTExQzE0ODMuMDUgNjA4LjQ3NCAxNTcyLjc5IDYwOC40ODMgMTYyOC4xMyA1NzYuNTMxTDE2OTQuMTIgNTM4LjQzM0MxNjk2Ljk3IDUzNi43ODYgMTY5OS42OCA1MzUuMDg3IDE3MDIuMjQgNTMzLjM0QzE3NTYuMzcgNTA2Ljc3NSAxODM3LjYgNTA4LjE2NCAxODg4Ljk0IDUzNy41MDJDMTg4OS4xMSA1MzcuNjAxIDE4ODkuMjggNTM3LjcwMSAxODg5LjQ1IDUzNy44TDE5NTUuNDYgNTc1LjkxMkMyMDA5LjQ4IDYwNy4wOTUgMjAwOS40OSA2NTcuNjQ1IDE5NTUuNSA2ODguODE4TDE4ODkuNTEgNzI2LjkxN0MxODg5LjQyIDcyNi45NzEgMTg4OS4zMiA3MjcuMDI1IDE4ODkuMjMgNzI3LjA4QzE4MzUuMjEgNzU4LjA4OCAxNzQ3Ljg3IDc1OC4wMjUgMTY5My45NSA3MjYuODk2TDE2MjcuOTQgNjg4Ljc4NEMxNTcyLjU4IDY1Ni44MjIgMTQ4Mi44NCA2NTYuODEzIDE0MjcuNSA2ODguNzY0TDEzNjEuNTEgNzI2Ljg2M0MxMzA3LjUyIDc1OC4wMzYgMTIxOS45NiA3NTguMDI3IDExNjUuOTUgNzI2Ljg0M0wxMDk5Ljk0IDY4OC43MzJDMTA0NS45MyA2NTcuNTQ4IDEwNDUuOTEgNjA2Ljk5OSAxMDk5LjkxIDU3NS44MjZMMTE2NS45IDUzNy43MjdaTTE4NzUuMDQgNzM2LjY4MUMxODI1LjMzIDc1Ny41NzYgMTc1Ny4zOSA3NTcuNDg0IDE3MDcuODIgNzM2LjQwN0MxNzQzLjY5IDc2NC4yNTggMTc0NC45NiA4MDIuMjc2IDE3MTEuNjIgODMwLjgzMUMxNzYyLjEyIDgxMS40OSAxODI5LjM3IDgxMi44MTkgMTg3Ny41OSA4MzQuODE1QzE4MzkuMDIgODA2LjA3MiAxODM4LjE3IDc2NS45MTQgMTg3NS4wNCA3MzYuNjgxWk0yMjI4LjM3IDgzNS42NzRDMjIyNC42NyA4MzcuNDE1IDIyMjEuMDkgODM5LjI3OSAyMjE3LjY1IDg0MS4yNjhMMjE1MS42NiA4NzkuMzY3QzIxMjUgODk0Ljc1OCAyMDkwLjE2IDkwMi41NDggMjA1NS4yMiA5MDIuNzM3QzIwMjAuMDIgOTAyLjY1MSAxOTg0Ljg2IDg5NC44NTMgMTk1OCA4NzkuMzQ1TDE4OTEuOTkgODQxLjIzM0MxODM4LjA3IDgxMC4xMDQgMTgzNy45NiA3NTkuNjc2IDE4OTEuNjcgNzI4LjQ5QzE4OTEuNzcgNzI4LjQzNSAxODkxLjg2IDcyOC4zODEgMTg5MS45NiA3MjguMzI2TDE5NTcuOTQgNjkwLjIyN0MyMDEzLjI5IDY1OC4yNzYgMjAxMy4yNyA2MDYuNDYzIDE5NTcuOTEgNTc0LjUwMUwxODkxLjkgNTM2LjM4OUMxODkxLjczIDUzNi4yOSAxODkxLjU1IDUzNi4xOTEgMTg5MS4zOCA1MzYuMDkyQzE4MzcuODggNTA0Ljg4NSAxODM4LjA0IDQ1NC41NTggMTg5MS44NiA0MjMuNDg0TDE5NTcuODUgMzg1LjM4NkMyMDExLjg0IDM1NC4yMTMgMjA5OS40IDM1NC4yMjIgMjE1My40MSAzODUuNDA1TDIyMTkuNDIgNDIzLjUxN0MyMjc0Ljc4IDQ1NS40NzkgMjM2NC41MiA0NTUuNDg4IDI0MTkuODYgNDIzLjUzN0wyNDg1Ljg1IDM4NS40MzhDMjUzOS44NSAzNTQuMjY2IDI2MjcuNCAzNTQuMjc0IDI2ODEuNDEgMzg1LjQ1OEwyNzQ3LjQyIDQyMy41N0MyODAxLjQzIDQ1NC43NTMgMjgwMS40NSA1MDUuMzAzIDI3NDcuNDYgNTM2LjQ3NUwyNjgxLjQ3IDU3NC41NzRDMjYyNy43NiA2MDUuNTgxIDI1NDAuODUgNjA1LjczNyAyNDg2Ljc4IDU3NS4wNTFMMjQyMy42NSA1MzguNjA3QzI0MjMuMzYgNTM4LjQzOSAyNDIzLjA3IDUzOC4yNzIgMjQyMi43OCA1MzguMTA1TDI0MTkuOSA1MzYuNDQzQzIzNjQuNTQgNTA0LjQ4IDIyNzQuOCA1MDQuNDcxIDIyMTkuNDUgNTM2LjQyM0wyMTUzLjQ3IDU3NC41MjJDMjA5OC4xMiA2MDYuNDczIDIwOTguMTQgNjU4LjI4NSAyMTUzLjUgNjkwLjI0OEwyMjE5LjUxIDcyOC4zNkMyMjcwLjQgNzU3Ljc0MSAyMjczLjM2IDgwNC4zMTQgMjIyOC4zNyA4MzUuNjc0Wk0yMzMyLjE3IDUxNC43ODVDMjI5Mi43NCA1MTIuNzI4IDIyNTIuMDcgNTIwLjQxIDIyMjEuOSA1MzcuODMzTDIxNTUuOTEgNTc1LjkzMkMyMTI1LjY2IDU5My4zOTYgMjExMi4zNiA2MTYuOTQxIDIxMTYuMDEgNjM5Ljc1NUMyMTEzLjUyIDYxNy4xMTIgMjEyNy4yNiA1OTMuOTg3IDIxNTcuMjIgNTc2LjY4NkwyMjIzLjIxIDUzOC41ODdDMjI1My4xMSA1MjEuMzI4IDIyOTMuMDQgNTEzLjM5NCAyMzMyLjE3IDUxNC43ODVaTTE4NzQuOTcgNTI4LjAyOUMxODM4Ljg2IDQ5OS4zOTUgMTgzOC45IDQ2MC4yOTYgMTg3NS4xMiA0MzEuNzA0QzE4MjUuMTUgNDUyLjggMTc1Ni42NSA0NTIuNjM1IDE3MDYuOTQgNDMxLjIxMkMxNzQzLjk3IDQ1OS40MTEgMTc0NS4xNCA0OTguMjk0IDE3MTAuNDUgNTI3LjE1NkMxNzU5Ljc1IDUwNy4yMDkgMTgyNi4xNSA1MDcuNTAxIDE4NzQuOTcgNTI4LjAyOVpNMTY5OS43OCA1MzEuOTI4QzE3NDUuNTIgNTAwLjU2NSAxNzQyLjggNDUzLjY1MyAxNjkxLjY0IDQyNC4xMTZMMTYyNS42MyAzODYuMDA0QzE1NzEuNjIgMzU0LjgyMSAxNDg0LjA3IDM1NC44MTIgMTQzMC4wNyAzODUuOTg1TDEzNjQuMDggNDI0LjA4NEMxMzEyLjQ3IDQ1My44ODEgMTMxMC4yMSA1MDEuMzg0IDEzNTcuMjkgNTMyLjc1MkMxMzU5LjU0IDUzMy44OTkgMTM2MS43NCA1MzUuMDk0IDEzNjMuOSA1MzYuMzM3TDE0MjkuOTEgNTc0LjQ0OEMxNDgzLjkyIDYwNS42MzIgMTU3MS40NyA2MDUuNjQxIDE2MjUuNDcgNTc0LjQ2OEwxNjkxLjQ2IDUzNi4zNjlDMTY5NC4xNSA1MzQuODEzIDE2OTYuOTMgNTMzLjMzMyAxNjk5Ljc4IDUzMS45MjhaTTEzNDUuNzcgNTI3LjQ3OEMxMjk2LjM3IDUwNy4xNTkgMTIyOS40NiA1MDcuMzIgMTE4MC4zNiA1MjcuOTY1QzEyMTYuNDIgNDk5LjM3MyAxMjE2LjQgNDYwLjMzIDExODAuMjkgNDMxLjczOEMxMjMwLjcxIDQ1Mi45MyAxMjk5Ljg1IDQ1Mi41NSAxMzQ5LjU3IDQzMC41OTJDMTMxMS42NSA0NTguOTQ0IDEzMTAuMzggNDk4LjM3MyAxMzQ1Ljc3IDUyNy40NzhaTTIwNTUuMjMgOTA0LjczMUMyMDE4LjUxIDkwNC45MjYgMTk4MS42OCA4OTYuOTM1IDE5NTMuNjYgODgwLjc1N0wxODg3LjY1IDg0Mi42NDVDMTgzNy43NiA4MTMuODQzIDE3NTkuMjYgODExLjYzNiAxNzA1LjAxIDgzNi4wMzFDMTcwMS42OCA4MzguNDQ3IDE2OTguMDggODQwLjc4IDE2OTQuMjEgODQzLjAxNUwxNjI4LjIyIDg4MS4xMTRDMTYyNC4xIDg4My40OTUgMTYxOS43OCA4ODUuNjk4IDE2MTUuMzEgODg3LjcyNEMxNTcyLjM5IDkxOS4wNTYgMTU3NiA5NjQuNjg2IDE2MjYuMTMgOTkzLjYzTDE2OTIuMTUgMTAzMS43NEMxNzQxLjYgMTA2MC4zIDE4MTkuMTkgMTA2Mi43MSAxODczLjM4IDEwMzguOThDMTg3Ny4zNCAxMDM1LjkzIDE4ODEuNzMgMTAzMy4wMSAxODg2LjUzIDEwMzAuMjRMMTk1Mi41MiA5OTIuMTQzQzIwMDcuODYgOTYwLjE5MiAyMDk3LjYgOTYwLjIwMSAyMTUyLjk2IDk5Mi4xNjNMMjIxOC45NyAxMDMwLjI3QzIyMjIuMTcgMTAzMi4xMiAyMjI1LjE3IDEwMzQuMDMgMjIyOCAxMDM1Ljk5QzIyODIuMzQgMTA2Mi45MSAyMzY0LjI2IDEwNjEuNTIgMjQxNS43MSAxMDMxLjgxTDI0ODEuNyA5OTMuNzE2QzI1MjkuODkgOTY1Ljg5MiAyNTM1LjA1IDkyMi42MzIgMjQ5Ny4yIDg5MS40ODRDMjQ5My44MyA4ODkuODY2IDI0OTAuNTUgODg4LjE0MyAyNDg3LjM4IDg4Ni4zMTZMMjQyMS4zNyA4NDguMjA0QzI0MTUuNTQgODQ0LjgzNiAyNDEwLjMyIDg0MS4yNDggMjQwNS43MiA4MzcuNDg2QzIzNTUuMDcgODEzLjM3NSAyMjgxLjY4IDgxMy4yNDQgMjIzMC44MSA4MzcuMDk4QzIyMjguMDQgODM5LjAxNSAyMjI1LjEgODQwLjg3NyAyMjIxLjk5IDg0Mi42NzZMMjE1NiA4ODAuNzc0QzIxMjguMTkgODk2LjgzMiAyMDkxLjY4IDkwNC44MTggMjA1NS4yMyA5MDQuNzMxWk0xNzAyLjU2IDgzNC42MDVDMTc0NS40OCA4MDMuMjczIDE3NDEuODcgNzU3LjY0MyAxNjkxLjczIDcyOC42OTlMMTYyNS43MiA2OTAuNTg3QzE1NzEuNzEgNjU5LjQwNCAxNDg0LjE2IDY1OS4zOTUgMTQzMC4xNiA2OTAuNTY4TDEzNjQuMTggNzI4LjY2NkMxMzEwLjE4IDc1OS44MzkgMTMxMC4yIDgxMC4zODkgMTM2NC4yMSA4NDEuNTcyTDE0MzAuMjIgODc5LjY4NEMxNDgwLjExIDkwOC40ODYgMTU1OC42MSA5MTAuNjkzIDE2MTIuODYgODg2LjI5OEMxNjE2LjE4IDg4My44ODIgMTYxOS43OSA4ODEuNTUgMTYyMy42NiA4NzkuMzE0TDE2ODkuNjUgODQxLjIxNkMxNjkzLjc3IDgzOC44MzUgMTY5OC4wOSA4MzYuNjMxIDE3MDIuNTYgODM0LjYwNVpNNTQyLjk0NSAyODIuNTE1QzU1Mi4zMzYgMjc5LjI0IDU2MS4xOTkgMjc1LjI2MyA1NjkuMzA1IDI3MC41ODNMNjM1LjI5MyAyMzIuNDg1QzY4OS4yODYgMjAxLjMxMiA2ODkuMjcxIDE1MC43NjIgNjM1LjI2IDExOS41NzlMNTY5LjI0OCA4MS40NjdDNTEzLjg4OCA0OS41MDQ2IDUxMy44NzIgLTIuMzA3NzggNTY5LjIxNCAtMzQuMjU5Mkw2MzUuMjAyIC03Mi4zNTc5QzY4OS4xOTUgLTEwMy41MzEgNjg5LjE4IC0xNTQuMDggNjM1LjE2OSAtMTg1LjI2NEw1NjkuMTU3IC0yMjMuMzc2QzUxNS4xNDYgLTI1NC41NTkgNDI3LjU5MSAtMjU0LjU2OCAzNzMuNTk5IC0yMjMuMzk1TDMwNy42MSAtMTg1LjI5NkMyNTYuODY5IC0xNTYuMDAxIDI1My44MjYgLTEwOS41OTIgMjk4LjQ3MyAtNzguMjI2N0MzMDIuMDQgLTc2LjUzMzggMzA1LjQ5OSAtNzQuNzI1IDMwOC44MzIgLTcyLjgwMDNMMzc0Ljg0NCAtMzQuNjg4NEM0MzAuMjA1IC0yLjcyNjA1IDQzMC4yMiA0OS4wODYzIDM3NC44NzkgODEuMDM3N0wzMDguODkgMTE5LjEzNkMyNTQuODk3IDE1MC4zMDkgMjU0LjkxMiAyMDAuODU5IDMwOC45MjMgMjMyLjA0MkwzNzQuOTM1IDI3MC4xNTRDNDIwLjQ5NiAyOTYuNDU5IDQ4OS45MjYgMzAwLjU4IDU0Mi45NDUgMjgyLjUxNVpNODk5LjkyNiA1NzYuMDc3TDgzNC4zNSA1MzguMjE3Qzc4MC4zMzkgNTA3LjAzNCA2OTIuNzg0IDUwNy4wMjUgNjM4Ljc5MiA1MzguMTk4TDU3Mi44MDMgNTc2LjI5N0M1MTguODEgNjA3LjQ2OSA1MTguODI1IDY1OC4wMTkgNTcyLjgzNiA2ODkuMjAyTDYzOC44NDggNzI3LjMxNEM2ODkuNjQ4IDc1Ni42NDMgNzcwLjEyMSA3NTguMzk1IDgyNC40MzQgNzMyLjU2M0M4MjcuMjcxIDczMC41ODQgODMwLjI5NSA3MjguNjY0IDgzMy41MDQgNzI2LjgxMUw4OTkuNDkzIDY4OC43MTNDOTUzLjMzIDY1Ny42MyA5NTMuNDcgNjA3LjI4MiA4OTkuOTI2IDU3Ni4wNzdaTTE4NzUuODUgMTA0MC40QzE4MzUuNDEgMTA3MS42NiAxODM5LjggMTExNi4xNSAxODg5LjAxIDExNDQuNTZMMTk1NS4wMiAxMTgyLjY3QzIwMDkuMDMgMTIxMy44NSAyMDk2LjU4IDEyMTMuODYgMjE1MC41OCAxMTgyLjY5TDIyMTYuNTcgMTE0NC41OUMyMjY3LjM3IDExMTUuMjYgMjI3MC4zNiAxMDY4Ljc2IDIyMjUuNTIgMTAzNy40QzIyMjIuODUgMTAzNi4wNyAyMjIwLjI0IDEwMzQuNjcgMjIxNy43MSAxMDMzLjJMMjE1MS42OSA5OTUuMDkzQzIwOTcuNjggOTYzLjkwOSAyMDEwLjEzIDk2My45MDEgMTk1Ni4xNCA5OTUuMDczTDE4OTAuMTUgMTAzMy4xN0MxODg1LjYgMTAzNS44IDE4ODAuODIgMTAzOC4yIDE4NzUuODUgMTA0MC40Wk0yNDk5Ljc2IDg5MC4xMThDMjU1NC4wOSA5MTUuOTgxIDI2MzQuNTkgOTE0LjI1MiAyNjg1LjM4IDg4NC45MjVMMjc1MS4zNyA4NDYuODI3QzI4MDUuMzcgODE1LjY1NCAyODA1LjM1IDc2NS4xMDQgMjc1MS4zNCA3MzMuOTIxTDI2ODUuMzMgNjk1LjgwOUMyNjMxLjMyIDY2NC42MjYgMjU0My43NiA2NjQuNjE3IDI0ODkuNzcgNjk1Ljc5TDI0MjMuNzggNzMzLjg4OEMyMzc1LjU5IDc2MS43MTIgMjM3MC40MiA4MDQuOTcyIDI0MDguMjcgODM2LjEyQzI0MTEuNjUgODM3LjczOCAyNDE0LjkzIDgzOS40NjEgMjQxOC4wOSA4NDEuMjg4TDI0ODQuMSA4NzkuNEMyNDg5Ljk0IDg4Mi43NjggMjQ5NS4xNiA4ODYuMzU2IDI0OTkuNzYgODkwLjExOFpNMjQyMC4zNSA1MzkuNTIxTDI0ODMuNDcgNTc1Ljk2NUMyNDgzLjc2IDU3Ni4xMzMgMjQ4NC4wNSA1NzYuMyAyNDg0LjM0IDU3Ni40NjdMMjQ4Ny4yMiA1NzguMTI5QzI1NDIuNTggNjEwLjA5MiAyNjMyLjMzIDYxMC4xMDEgMjY4Ny42NyA1NzguMTQ5TDI3NTMuNjYgNTQwLjA1QzI4MDcuNjUgNTA4Ljg3OCAyODk1LjIgNTA4Ljg4NiAyOTQ5LjIyIDU0MC4wN0wzMDE1LjIzIDU3OC4xODJDMzA2OS4yNCA2MDkuMzY1IDMwNjkuMjUgNjU5LjkxNSAzMDE1LjI2IDY5MS4wODdMMjk0OS4yNyA3MjkuMTg2QzI4OTUuMjggNzYwLjM1OSAyODA3LjcyIDc2MC4zNSAyNzUzLjcxIDcyOS4xNjdMMjY4Ny43IDY5MS4wNTVDMjYzMi4zNCA2NTkuMDkyIDI1NDIuNiA2NTkuMDg0IDI0ODcuMjYgNjkxLjAzNUwyNDIxLjI3IDcyOS4xMzRDMjM2Ny4yOCA3NjAuMzA2IDIyNzkuNzIgNzYwLjI5OCAyMjI1LjcxIDcyOS4xMTRMMjE1OS43IDY5MS4wMDJDMjEwNS42OSA2NTkuODE5IDIxMDUuNjcgNjA5LjI2OSAyMTU5LjY3IDU3OC4wOTdMMjIyNS42NSA1MzkuOTk4QzIyNzkuMzYgNTA4Ljk5MSAyMzY2LjI3IDUwOC44MzUgMjQyMC4zNSA1MzkuNTIxWiIKICAgICAgICAgIGZpbGw9InVybCgjcGFpbnQwX2xpbmVhcl8xNzU5XzE1ODgpIi8+CiAgICA8ZGVmcz4KICAgICAgICA8bGluZWFyR3JhZGllbnQgaWQ9InBhaW50MF9saW5lYXJfMTc1OV8xNTg4IiB4MT0iMTI2MS41NCIgeTE9IjQ4NS40NjciIHgyPSIxODk1LjQ4IiB5Mj0iLTYxMi41NTQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KICAgICAgICAgICAgPHN0b3Agc3RvcC1jb2xvcj0id2hpdGUiLz4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSJ3aGl0ZSIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KPC9zdmc+Cg==';
@endphp
<html>
<head>
<title>{{$title}} - 4programmers.net</title>
<link href="//fonts.googleapis.com/css?family=Inter:500,700" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="/img/apple-touch.png?v2">
<link rel="shortcut icon" href="/img/favicon.png?v3" type="image/png">
<style>
    body {
        font-family: 'Inter', Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: url({{$stroke}}) no-repeat, radial-gradient(circle at bottom right, #a7e0ba 0, transparent 100%) right bottom;
        background-size: cover;
    }

    .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
    }

    h1 {
        font-size: 72px;
        font-weight: 700;
    }

    img.logo {
        margin: 32px 0;
        width: 224px;
    }

    @media (min-width: 640px) {
        body {
            background-position: right top, right bottom;
            background-size: contain;
        }

        .container {
            padding: 0 64px;
        }

        img.logo {
            margin: 96px 0;
        }
    }
</style>
@yield('head')
</head>
<body>
<div class="container">
  <img class="logo" src="{{$logo}}">
  @yield('content')
</div>
</body>
</html>