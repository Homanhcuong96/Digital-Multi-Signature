from representative_signature import RepresentativeSignature
import sys

def main():
	file = sys.argv[1]
	try:
		rs = RepresentativeSignature()
		rs.read_content_from_file(file)
		rs.generate_hash_digest()
		hash_digest = rs.get_hash_digest()
		print(hash_digest)
	except Exception as e:
		print(e)

if __name__ == '__main__':
	main()