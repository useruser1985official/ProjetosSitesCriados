// Gerador de times da Timemania.

var numero = Math.round(Math.random() * (80 - 1) + 0);

var time = ["ABC - RN", "América - MG", "América - RJ", "América - RN", "Americano - RJ", "Atlético - GO", "Atlético - MG", "Atlético - PR", "Avaí - SC", "Bahia - BA",
"Bangu - RJ", "Barueri - SP", "Botafogo - PB", "Botafogo - RJ", "Bragantino - SP", "Brasiliense - DF", "Ceará - CE", "Corinthians - SP", "Coritiba - PR", "CRB - AL",
"Criciúma - SC", "Cruzeiro - MG", "CSA - AL", "Desportiva - ES", "Figueirense - SC", "Flamengo - RJ", "Fluminense - RJ", "Fortaleza - CE", "Gama - DF", "Goiás - GO",
"Grêmio - RS", "Guarani - SP", "Inter Limeira - SP", "Internacional - RS", "Ipatinga - MG", "Ituano - SP", "Ji Paraná - RO", "Joinville - SC", "Juventude - RS", "Juventus - SP",
"Londrina - PR", "Marília - SP", "Mixto - MT", "Moto Clube - MA", "Nacional - AM", "Náutico - PE", "Olaria - RJ", "Operário - MS", "Palmas - TO", "Palmeiras - SP", "Paraná - PR",
"Paulista - SP", "Paysandu - PA", "Ponte Preta - SP", "Portuguesa de Desportos - SP", "Remo - PA", "Rio Branco - AC", "Rio Branco - ES", "River - PI", "Roraima - RR",
"Sampaio Corrêa - MA", "Santa Cruz - PE", "Santo André - SP", "Santos - SP", "São Caetano - SP", "São Paulo - SP", "São Raimundo - AM", "Sergipe - SE", "Sport - PE", "Treze - PB",
"Tuna Luso - PA", "Uberlândia - MG", "União Barbarense - SP", "União São João - SP", "Vasco - RJ", "Vila Nova - GO", "Vila Nova - MG", "Vitória - BA", "XV de Piracicaba - SP", "Ypiranga - AP"];

document.write("\n\t\t\t\t<div class=\"time\"><p>" + time[numero] + "</p></div>");