#!/bin/bash

echo "PS: Coloque esse script no mesmo diretório do programa compilado!"

echo "PS: Rode primeiro o comando \"chrpath -r \\\$ORIGIN NomeDoPrograma\" no programa desejado!"

echo "Adicione também o parâmetro abaixo no arquivo .pro do projeto:"

echo

echo "unix: {"
    
echo "    QMAKE_LFLAGS_RPATH="

echo "    QMAKE_LFLAGS += \"-Wl,-rpath,\\'\\\$\$ORIGIN\'\""

echo "}"

echo

read -p "Pressione Qualquer Tecla pra Continuar..." t

clear

read -p "Deseja fazer o deploy básico do programa em QT no Linux? [S/N] " opc

if [ $opc = s ]||[ $opc = S ]; then
	rm *.o

	rm *.h

	rm *.cpp

	rm Makefile

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/libQt6Widgets.so.6 "$PWD"

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/libQt6Core.so.6 "$PWD"

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/libQt6Gui.so.6 "$PWD"

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/libQt6DBus.so.6 "$PWD"

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/libicui18n.so.56 "$PWD"

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/libicuuc.so.56 "$PWD"

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/libicudata.so.56 "$PWD"

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/libQt6XcbQpa.so.6 "$PWD"

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/libQt6OpenGL.so.6 "$PWD"

	sudo cp -r /opt/Qt/6.2.2/gcc_64/plugins/platforms/ "$PWD"

	sudo cp -r /opt/Qt/6.2.2/gcc_64/plugins/imageformats/ "$PWD"

	sudo chown -R eu:eu *

	cd platforms

	chrpath -r \$ORIGIN/.. libqxcb.so

	cd ..

	clear

	echo "Deploy Realizado com Êxito!"

	echo "PS: Pode ser necessárias outras bibliotecas, para isso rode \"ldd NomeDoPrograma | grep \"not found\"\" no programa caso ele não funcione!"

	echo "Pode ser necessário também outras pastas de plugins, como as \"printsupport\" ou \"sqldrivers\", para isso rode os comandos \"ls /opt/Qt/6.2.2/gcc_64/plugins/\", \"sudo cp -r /opt/Qt/6.2.2/gcc_64/plugins/NomeDaPasta/ \"\$PWD\"\" e \"sudo chown -R eu:eu *\"."
else
	echo "Operação Abortada!"
fi

echo

read -p "Deseja Procurar Outras Bibliotecas? [S/N] " opc

while [ $opc = s ]||[ $opc = S ]; do
	clear

	read -p "Digite o nome da biblioteca a adicionar: " bibl

	sudo cp /opt/Qt/6.2.2/gcc_64/lib/$bibl "$PWD"

	if [ $bibl = "libQt6Sql.so.6" ]; then
		sudo cp -r /opt/Qt/6.2.2/gcc_64/plugins/sqldrivers/ "$PWD"
	fi

	sudo chown -R eu:eu *

	echo

	read -p "Deseja Continuar? [S/N] " opc
done