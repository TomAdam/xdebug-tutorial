ENV['VAGRANT_DEFAULT_PROVIDER'] = 'virtualbox'

[
    { :name => "vagrant-hostmanager", :version => ">= 1.5.0" },
    { :name => "vagrant-vbguest", :version => ">= 0.13.0" }
].each do |plugin|
    if not Vagrant.has_plugin?(plugin[:name], plugin[:version])
        raise "#{plugin[:name]} #{plugin[:version]} is required. Please run `vagrant plugin install #{plugin[:name]}`"
    end
end

Vagrant.configure("2") do |config|
    config.vm.provider :virtualbox do |v|
        v.name = "xdebug-tutorial"
        v.customize [
            "modifyvm", :id,
            "--name", v.name,
            "--memory", 2048,
            "--natdnshostresolver1", "on",
            "--cpus", 1,
        ]
    end

    config.vm.hostname = "xdebug.dev"
    config.vm.box = "debian/jessie64"

    config.vm.network :private_network, ip: "192.168.42.212"
    config.ssh.forward_agent = true

    config.hostmanager.enabled = true
    config.hostmanager.manage_host = true

    config.vm.synced_folder ".", "/vagrant", type: "virtualbox"

    config.vm.provision "shell", path: "ansible/bootstrap.sh"

    config.vm.provision "ansible_local" do |ansible|
        ansible.install = true
        ansible.playbook = "ansible/provision.yml"
    end
end
