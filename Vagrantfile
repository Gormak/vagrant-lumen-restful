# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "stretch/jessie64"
  config.vm.network "private_network", type: "dhcp"
  
  config.vm.provision :shell, path: "config/provision.sh"
  
  config.vm.synced_folder "www/", "/home/vagrant/www"
  
  config.vm.synced_folder "config/", "/home/vagrant/config"
  
  config.vm.provision :shell, path: "config/post_install.sh"
  
end
