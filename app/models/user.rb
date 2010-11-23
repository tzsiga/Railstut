class User < ActiveRecord::Base
# init + reader + writer
attr_accessor :password

#RAILS
attr_accessible :name, :email, :password, :password_confirmation	# csak ezeknek enged többszörös értékadást

email_regex = /\A[\w+\-.]+@[a-z\d\-.]+\.[a-z]+\z/i

validates	:name,		:presence => true,
						:length => { :maximum => 50 }
validates	:email,		:presence => true,
						:format => { :with => email_regex }
validates	:password,	:presence => true,
						:confirmation => true,
						:length => { :within => 6..40 }

before_save	:encrypt_password

private

	def encrypt_password
		self.encrypted_password = encrypt(password)
	end
	
	def encrypt(string)
		string		# vmi titkosítás jönne ide
	end

end
