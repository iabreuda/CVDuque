# Configurando o ambiente de desenvolvimento

Uma serie de dependencias devem ser instaladas para facilitar o desenvolvimento do projeto.

## Instalando pacotes

```
sudo apt-get install php7.0
sudo apt-get install git
sudo apt-get install composer
```

## Instalando o Editor de texto

O Editor de texto a ser utilizado sera o sublime3, para instala-lo utilizando o apt-get siga os seguintes passos:
```
wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg | sudo apt-key add -
echo "deb https://download.sublimetext.com/ apt/stable/" | sudo tee /etc/apt/sources.list.d/sublime-text.list
sudo apt-get update
sudo apt-get install sublime-text

```

Para habilitar o gerenciador de pacotes do sublime
```
ctrl+`
import urllib.request,os,hashlib; h = 'df21e130d211cfc94d9b0905775a7c0f' + '1e3d39e33b79698005270310898eea76'; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( 'http://packagecontrol.io/' + pf.replace(' ', '%20')).read(); dh = hashlib.sha256(by).hexdigest(); print('Error validating download (got %s instead of %s), please try manual install' % (dh, h)) if dh != h else open(os.path.join( ipp, pf), 'wb' ).write(by) 
```
### Pacotes do sublime a serem instalados

## Utilizacao do Git

### Clonando o projeto
```
git clone https://github.com/iabreuda/CVDuque.git
```

### Workflow do git